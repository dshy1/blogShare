@extends('layouts.main-back')

@section('title', $plataforma. ' | ' .$post->titulo)

@section('content')

  <style type="text/css">

      .alert-success {
          width: 420px;
          position: absolute;
          top: 80px;
      }
      .image_post {
        max-width: 100%;
      }
      .autor-info {
        display: flex;
        align-items: center;
        margin-bottom: 25px;
      }
      .nome-autor {
        margin-bottom: 0!important;
        padding-left: 15px;
      }
      h5.ultima-atualizacao {
        margin-top: 15px;
      }
      .cinza-claro {
        background: #f7f5f5;
      }
      .marginLeft4 {
        margin-left: 4px;
      }

  </style>


   <!-- ########## START: MAIN PANEL ########## -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Post Informacoes</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Posts</a></li>
                                    <li class="breadcrumb-item active">Informações</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- Post Detalhes --}}
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="header-title mb-4">{{ $post->titulo }}</h3>
                                <img class="img-fluid rounded image_post" src="{{ asset($caminho.'storage/images/posts/'.$post->image) }}" alt="Image">
                                <p>{!! $post->texto !!}</p>
                                <h3 class="header-title mb-4">Categorias:</h3>
                                <ul>
                                  @foreach($post->categorias as $categoria)
                                   <li> 
                                    {{ $categoria->nome }} 
                                  </li>
                                  @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- Post Informacoes --}}
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                              <div class="autor-info">
                                  <img src="{{ $post->autor->image !== null ? asset($caminho.'storage/images/users/'.$post->autor->image) : asset($caminho.'storage/images/users/avatar01.jpg') }}" class="avatar-xs rounded-circle" alt="author image" />
                                  <h3 class="header-title mb-4 nome-autor">{{ $post->autor->name }}</h3>
                              </div>
                              <h5 class="font-size-14 mb-1">Data de Criação:</h5>
                              <p class="text-muted mb-0 font-size-13">{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y')}}</p>
                              <h5 class="font-size-14 mb-1 ultima-atualizacao">Última Atualização:</h5>
                              <p class="text-muted mb-0 font-size-13">{{ \Carbon\Carbon::parse($post->updated_at)->format('d M, Y')}}</p>
                              <hr class="cinza-claro">

                              <div class="media mg-b-25">
                                  <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-success btn-sm">Editar</a>
                                  <form action="{{route('posts.destroy', ['id' => $post->id])}}" method="POST" id="form-delete-post02">
                                      @csrf
                                      @method('DELETE') 

                                        <input type="submit" value="Deletar" class="btn btn-outline-danger btn-sm marginLeft4" onclick="return confirmDelete();" />
                                  </form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            {{-- container --}}
        </div>
        {{-- page-content --}}
    </div>
    <!-- main-content -->
@endsection


@section('scripts')

    <!-- Script JS -->
    <script type="text/javascript">

        // Função para confirmar deletar 
        function confirmDelete() {
            if (confirm("Deseja realmente deletar esse Post?")) {
                return true;
            }else {
                return false;
            }
        }

    </script>

@stop



