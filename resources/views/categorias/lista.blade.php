@extends('layouts.main-back')

@section('title', $cliente . ' | Listagem de Categorias')

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
      color: #1caf9a;
    }
    #form-delete-categorias {
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
      <span class="breadcrumb-item active">Categorias</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagetitle">
    <i class="large material-icons">bookmarks</i>
    <div>
      <h2 class="tx-white">Categorias</h2>
      <p class="mg-b-0 cinza-claro">Aqui você pode ver e alterar todas as categorias cadastradas no sistema</p>
    </div>
  </div><!-- d-flex -->

    @if(Session::has('error'))
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
       </div>
    @endif
 
  <a href="{{ route('categorias.create') }}" class="btn btn-success btn-sm bt-novo disabled" title="Criar nova categoria">Novo</a>
  
  <div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="bd bd-white-1 rounded table-responsive">
            <table class="table table-striped mg-b-0">
              <thead class="thead-colored thead-teal">
                <tr>
                  <th class="titulo-tabela">#</th>
                  <th class="titulo-tabela">Nome</th>
                  <th class="titulo-tabela">Descrição</th>
                  <th class="titulo-tabela">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                      <td>{{ $categoria->id }}</td>
                      <td>{{ $categoria->nome }}</td>
                      <td>{{ $categoria->descricao ?? 'Não Informado' }}</td>
                      <td class="d-flex">
                        <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-link sem-padding disabled">Editar</a>
                        |
                        <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" id="form-delete-categorias">
                           @method('DELETE')
                           @csrf
                           <input type="submit" class="btn btn-link sem-padding disabled" name="" value="Deletar" onclick="return false;" />
                        </form>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- bd -->
    </div>
  </div>
</div><!--  end mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->


@endsection

@section('scripts')

  <!-- Script JS -->
  <script type="text/javascript">

    function confirmDelete() {
        if (confirm("Deseja realmente deletar essa categoria?")) {
           return true;
        } else {
          return false;
        }
    }

     function fecharAlert() {
      
      document.getElementById("close").style.display = "none";
   }

  </script>

@stop



