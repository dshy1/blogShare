@extends('layouts.main-back')

@section('title', $plataforma. ' | Listagem de Posts')

@section('content')

    <style type="text/css">

        .large {
            font-size: 78px;
        }
        .botoes {
            display: flex;
            align-items: center;
        }
        .botoes input,  .botoes a {
            position: relative;
            top: 10px;
        }
        img.thumb-image {
            width: 60px;
            height: 45px;
            object-fit: cover;
        }
        .marginLeft4 {
            margin-left: 4px;
        }
        .alert-success {
            position: relative;
            left: 25%;
            margin: 100px 0 -60px;
        }
        .row-alert {
            max-width: 80%;
        }
        .fa-check-circle {
            font-size: 20px;
            margin-right: 7px;
        }
        .novo-post {
            display: flex;
            justify-content: flex-end;
        }
     
    </style>


    @if(Session::has('success'))
        <div class="row justify-content-center row-alert">
            <div class="col-md-8 alert alert-success alert-dismissible fade show" role="alert" id="close">
                <strong><i class="fas fa-check-circle"></i></strong>{{ Session::get('success') }}
                <button type="button" class="close" data-dimiss="alert" aria-label="Close"><span aria-hidden="true" onclick="fecharAlert();"><strong>&times;</strong></span></button>
            </div>
        </div>
    @endif

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Posts</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <a href="javascript: void(0);">Home</a>
                                        <a href="javascript: void(0);" class="breadcrumb-item active"> / Posts</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div> 

                @if(Session::has('error'))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <div class="row">
                    <div class="col-md-12 novo-post">
                        <a href="{{ route('post.create') }}" class="btn btn-success btn-md bt-novo" title="Criar Novo Post"><span>+</span> Novo</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Posts Recentes</h4>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                               <th scope="col"  style="width: 50px;">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckall" />
                                                        <label class="custom-control-label" for="customCheckall"></label>
                                                    </div>
                                                </th>
                                                <th class="titulo-tabela">#</th>
                                                <th class="titulo-tabela">Título</th>
                                                <th class="titulo-tabela">Texto</th>
                                                <th class="titulo-tabela">Autor</th>
                                                <th class="titulo-tabela">Thumb</th>
                                                <th class="titulo-tabela">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($posts as $post)
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="{{ $post->id }}" />
                                                            <label class="custom-control-label" for="{{ $post->id }}"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('post.show', $post->id) }}" class="link-branco">{{ $post->id }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('post.show', $post->id) }}" class="link-branco">{{substr(strip_tags($post->titulo), 0, 40) . '...' ?? 'Não Informado'}}</a>
                                                    </td>

                                                    <td>{{substr(strip_tags($post->texto), 0, 20) . '...' ?? 'Não Informado'}}
                                                    </td>
                                                    
                                                    <td>{{ $post->autor->name }}</td>
                                                    <td>
                                                        <a href="#">
                                                            <img src="{{ asset($path.'storage/images/posts/'.$post->image) }}" alt="Post image" class="thumb-image" />
                                                        </a>
                                                    </td>
                                                    <td class="botoes">
                                                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-outline-primary btn-sm com-margin">Ver</a> 
                                                        {{-- @if(Auth::user()->email === 'teste@gmail.com')
                                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-success btn-sm com-margin disabled">Editar</a> 
                                                        @else --}}
                                                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-outline-success btn-sm marginLeft4">Editar</a> 

                                                        <form action="{{route('post.destroy', ['id' => $post->id])}}" method="POST" id="form-delete-post01">
                                                            @csrf
                                                            @method('DELETE')

                                                              <input type="submit" class="btn btn-outline-danger btn-sm marginLeft4" value="Deletar" id="btn-delete-post" onclick="teste();" />
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- main-content -->

@endsection


<!-- Script JS -->
@section('scripts')

    <script type="text/javascript">

        // Funçao para confirmar deletar 
        function confirmDelete() {

            if (confirm("Deseja realmente deletar esse Post?")) {
                return true;
            } else {
                return false;
            }
        }

        // Funçao para fechar div de msg de alerta
        function fecharAlert() {
            document.getElementById("close").style.display = "none";
        }

        // Alerta com swal
        function teste() {

            swal.fire({
              title: 'Tem certeza que deseja excluir?',
              text: "Essa acao e irreversivel!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Sim, deletar!'
            }).then((result) => {
              if (result.value) {
                swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
            })
        }
        
    </script>

@stop
