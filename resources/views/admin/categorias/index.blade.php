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
        .tab-nome {
            min-width: 150px;
            max-width: 150px;
        }
        .tab-descricao {
            min-width: 300px;
            max-width: 300px;
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
                            <h4 class="mb-0 font-size-18">Categorias</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <a href="javascript: void(0);">Home</a>
                                        <a href="javascript: void(0);" class="breadcrumb-item active"> / Categorias</a>
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
                        <a href="{{ route('categorias.create') }}" class="btn btn-success btn-md bt-novo" title="Criar Nova Categoria"><span>+</span> Novo</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Categorias Recentes</h4>
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
                                                <th class="titulo-tabela tab-nome">Nome</th>
                                                <th class="titulo-tabela tab-descricao">Descrição</th>
                                                <th class="titulo-tabela">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categorias as $cat)
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="{{ $cat->id}}" />
                                                            <label class="custom-control-label" for="{{ $cat->id}}"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-branco">{{ $cat->id }}</a>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="link-branco">{{ ucfirst($cat->nome)}}</a>
                                                    </td>
                                                    @if($cat->descricao)
                                                       <td>{{substr(strip_tags(ucfirst($cat->descricao)), 0, 60) . '...' }}
                                                       </td>
                                                    @else
                                                        <td>Não Informado</td>
                                                    @endif
                                                    <td class="botoes">
                                                        <a href="{{ route('categorias.edit', $cat->id) }}" class="btn btn-outline-success btn-sm marginLeft4">Editar</a> 

                                                        <form action="{{route('categorias.destroy', ['id' => $cat->id])}}" method="POST" id="form-delete-categoria">
                                                            @csrf
                                                            @method('DELETE')

                                                              <input type="submit" class="btn btn-outline-danger btn-sm marginLeft4" value="Deletar" onclick="return confirmDelete();" />
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
                    {{-- {{ $categorias->links() }} --}}
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

            if (confirm("Deseja realmente deletar essa Categoria?")) {
                return true;
            } else {
                return false;
            }
        }

        // Funçao para fechar div de msg de alerta
        function fecharAlert() {
            document.getElementById("close").style.display = "none";
        }
    </script>

@stop
