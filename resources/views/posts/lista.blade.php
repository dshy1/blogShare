@extends('layouts.main02')

@section('title', $cliente . ' | Listagem de Posts')

@section('content')

<style type="text/css">

    .com-padding-top {
        padding-top: 100px;
    }
    .alert-success {
        width: 420px;
        position: absolute;
        top: 80px;
    }
    .sem-padding {
        padding: 0 4px;
    }
    .d-flex {
        display: flex;
    }
    .large {
        font-size: 78px;
        color: #18a4b4;
    }
    #form-delete-posts {
        margin-top: -3px;
    }
    .bt-novo {
      float: right;
      margin-right: 32px;
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
            <span class="breadcrumb-item active">Posts</span>
        </nav>
    </div>
    <!-- br-pageheader -->

    <div class="br-pagetitle">
        <i class="large material-icons">description</i>
        <div>
            <h2 class="tx-white">Posts</h2>
            <p class="mg-b-0 cinza-claro">Aqui você pode ver e alterar todos os posts cadastrados no sistema</p>
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

    <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm bt-novo" title="Criar novo post">Novo</a>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="bd bd-white-1 rounded table-responsive">
                <table class="table table-striped mg-b-0">
                    <thead class="thead-colored thead-info">
                        <tr>
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
                            <td><a href="{{ route('posts.show', $post->id) }}" class="link-branco">{{ $post->id }}</a></td>
                            <td><a href="{{ route('posts.show', $post->id) }}" class="link-branco">{{substr(strip_tags($post->titulo), 0, 60) . '...' ?? 'Não Informado'}}</a></td>
                            <td>{{substr(strip_tags($post->texto), 0, 40) . '...' ?? 'Não Informado'}}</td>
                            <td>{{ $post->autor->name }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post->id) }}">
                                    <img src="{{ asset($caminho.'storage/images/posts/'.$post->image) }}" alt="Post image" style="width: 80px; height: 60px;">
                                </a>
                            </td>
                            <td class="d-flex">
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-link sem-padding">Ver</a> |
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-link sem-padding">Editar</a> |
                                <form action="{{route('posts.destroy', ['id' => $post->id])}}" method="POST" id="form-delete-posts">
                                    @csrf
                                    @method('DELETE') 
                                    <input type="submit" class="btn btn-link sem-padding disabled" name="" value="Deletar" onclick="return false;" />
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- bd -->

            {{ $posts->links() }}
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
    </script>

@stop
