@extends('layouts.main-back')

@section('title', 'jana. | Listagem de Usuários')

@section('content')

    <style type="text/css">

        .d-flex {
            display: flex;
        }
        .x-large {
            font-size: 92px;
            color: #809db1;         
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
                <span class="breadcrumb-item active">Usuários</span>
            </nav>
        </div>
        <!-- br-pageheader -->

        <div class="br-pagetitle">
            <i class="x-large material-icons">person</i>
            <div>
                <h2 class="tx-white">Usuários</h2>
                <p class="mg-b-0 cinza-claro">Aqui você pode ver e alterar todos os usuários cadastrados no sistema</p>
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

        <a href="{{ route('users.create') }}" class="btn btn-success btn-sm bt-novo" title="Criar novo usuário">Novo</a>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="bd bd-white-1 rounded table-responsive">
                    <table class="table table-striped mg-b-0">
                        <thead class="thead-colored thead-primary">
                            <tr>
                                <th class="titulo-tabela">#</th>
                                <th class="titulo-tabela">Nome</th>
                                <th class="titulo-tabela">E-mail</th>
                                <th class="titulo-tabela">Thumb</th>
                                <th class="titulo-tabela">Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><img src="{{ $user->image !== null ? asset($caminho.'storage/images/users/'.$user->image) : asset($caminho.'storage/images/users/avatar01.jpg') }}" alt="user image" style="width: auto; max-height: 40px;">
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-success btn-sm com-margin">Editar</a> 
                                    <form action="{{route('users.destroy', ['id' => $user->id])}}" method="POST" id="form-delete-users">
                                         @csrf
                                         @method('DELETE')
                                        <input type="submit" class="btn btn-outline-danger btn-sm" name="" value="Deletar" onclick="return confirmDelete();" />
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- bd -->

                {{ $users->links() }}
            </div>
        </div>

    </div>
    <!--  end mainpanel -->
    <!-- ########## START: MAIN PANEL ########## -->

@endsection

@section('scripts')

    <!-- Script JS -->
    <script type="text/javascript">

        // Funçao para confirmar deletar 
        function confirmDelete() {
            if (confirm("Deseja realmente deletar esse Usuário?")) {
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
