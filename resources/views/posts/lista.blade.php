@extends('layouts.main02') @section('title', 'Posts') @section('content')

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
        font-size: 50px;
    }
</style>


@if(Session::has('success'))
<div class="row justify-content-center">
    <div class="col-md-8 alert alert-success alert-dismissible fade show" role="alert" id="close">
        <strong><i class="fas fa-check-circle"></i></strong>{{ Session::get('success') }}
        <button type="button" class="close" data-dimiss="alert" aria-label="Close"><span aria-hidden="true"
                onclick="fecharAlert();"><strong>&times;</strong></span></button>
    </div>
</div>

@endif

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="#">Home</a>
            <span class="breadcrumb-item active">Posts</span>
        </nav>
    </div>
    <!-- br-pageheader -->

    <div class="br-pagetitle">
        <!-- <img src="svg/settings.svg" alt="Logo" width="70" /> -->
        <i class="large material-icons">bookmark_border</i>

        <!-- <i class="icon ion-ios-gear-outline"></i> -->
        <div>
            <h4>Posts</h4>
            <p class="mg-b-0">Aqui você pode ver e alterar todos os posts cadastrados no sistema</p>
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

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <div class="bd bd-white-1 rounded table-responsive">
                <table class="table table-striped mg-b-0">
                    <thead class="thead-colored thead-info">
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Texto</th>
                            <th>Autor</th>
                            <th>Imagem</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->titulo }}</td>
                            <td>{{substr(strip_tags($post->texto), 0, 40) . '...' ?? 'Não Informado'}}</td>
                            <td>{{ $post->autor->name }}</td>
                            <td><img src="{{ asset('storage/public/images/posts/'.$post->image) }}" alt="Imagem do Cliente" style="width: 100px; height: 70px;">
                            </td>

                            <td class="d-flex">
                                <a href="#" class="btn btn-link sem-padding">Ver</a> |
                                <a href="#" class="btn btn-link sem-padding">Editar</a> |
                                <form action="#" method="POST" id="delete">
                                    @method('DELETE') @csrf
                                    <input type="submit" class="btn btn-link sem-padding" name="" value="Deletar" onclick="return confirmDelete();" />
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


<!-- Script JS -->
<script type="text/javascript">
    function confirmDelete() {
        if (confirm("Deseja realmente deletar esse post?")) {
            return true;
        } else {
            return false;
        }
    }

    function fecharAlert() {

        document.getElementById("close").style.display = "none";
    }
</script>


@endsection