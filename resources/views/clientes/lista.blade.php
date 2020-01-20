@extends('layouts.main-back')

@section('title', $plataforma. ' | Listagem de Clientes')

@section('content')

    <style type="text/css">

        .large {
            font-size: 78px;
        }
        .d-flex input,  .d-flex a {
            position: relative;
            top: 16px;
        }
     
    </style>


    @if(Session::has('success'))
        <div class="row justify-content-center">
            <div class="col-md-8 alert alert-success alert-dismissible fade show" role="alert" id="close">
                <strong><i class="fas fa-check-circle"></i></strong>{{ Session::get('success') }}
                <button type="button" class="close" data-dimiss="alert" aria-label="Close"><span aria-hidden="true" onclick="fecharAlert();"><strong>&times;</strong></span></button>
            </div>
        </div>
    @endif

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                <span class="breadcrumb-item active">Clientes</span>
            </nav>
        </div>
        <!-- br-pageheader -->

        <div class="br-pagetitle">
            <i class="large material-icons cor-icones">description</i>
            <div>
                <h2 class="tx-white">Clientes</h2>
                <p class="mg-b-0 cinza-claro">Aqui você pode ver e alterar todos os clientes cadastrados no sistema</p>
            </div>
        </div>
        <!-- d-flex -->

        @if(Session::has('error'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <a href="{{ route('clientes.create') }}" class="btn btn-success btn-sm bt-novo" title="Criar novo post">Novo</a>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="bd bd-white-1 rounded table-responsive">
                    <table class="table table-striped mg-b-0">
                        <thead class="thead-colored thead-info">
                            <tr>
                                <th class="titulo-tabela">#</th>
                                <th class="titulo-tabela">Título</th>
                                <th class="titulo-tabela">Texto</th>
                                <th class="titulo-tabela">Site</th>
                                <th class="titulo-tabela">Thumb</th>
                                <th class="titulo-tabela">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="vertical-middle">
                            @foreach($portfolios as $port)
                            <tr>
                                <td>{{ $port->id }}</td>
                                <td>{{substr(strip_tags($port->titulo), 0, 60) . '...' ?? 'Não Informado'}}</td>
                                <td>{{substr(strip_tags($port->texto), 0, 80) . '...' ?? 'Não Informado'}}</td>
                                <td>{{ $port->url ?? 'www.sharecomunicacao.com.br' }}</td>
                                <td>
                                    <a href="{{ route('clientes.show', $port->id) }}">
                                        <img src="{{ asset($caminho.'storage/images/clientes/'.$port->image) }}" alt="Post image" style="width: 80px; height: 60px;">
                                    </a>
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('clientes.edit', $port->id) }}" class="btn btn-outline-success btn-sm com-margin">Editar</a> 
                                    <form action="{{route('clientes.destroy', ['id' => $port->id])}}" method="POST" id="form-delete-posts">
                                        @csrf
                                        @method('DELETE') 
                                        <input type="submit" class="btn btn-outline-danger btn-sm com-margin-top" name="" value="Deletar" onclick="return confirmDelete();" />
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- bd -->

                {{ $portfolios->links() }}
            </div>
        </div>
    </div>
    <!--  end mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection

@section('scripts')

    <!-- Script JS -->
    <script type="text/javascript">

        // Funçao para confirmar deletar 
        function confirmDelete() {
            if (confirm("Deseja realmente deletar esse Cliente?")) {
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
