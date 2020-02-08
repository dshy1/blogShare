@extends('layouts.main-back')

@section('title', $plataforma. ' | Listagem de Categorias')

@section('content')

  <style type="text/css">
  
      .large {
        font-size: 78px;
      }
      .bt-delete {
        margin-top: -2px;
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
    </div>

    <div class="br-pagetitle">
      <i class="large material-icons cor-icones">bookmarks</i>
      <div>
        <h2 class="tx-white">Categorias</h2>
        <p class="mg-b-0 cinza-claro">Aqui você pode ver e alterar todas as categorias cadastradas no sistema</p>
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
   
    <a href="{{ route('categorias.create') }}" class="btn btn-success btn-sm bt-novo" title="Criar nova categoria"><span>+</span> Novo</a>
    
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
                          @if(Auth::user()->email === 'teste@gmail.com')
                              <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-outline-success btn-sm com-margin disabled">Editar</a> 
                          @else
                              <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-outline-success btn-sm com-margin">Editar</a> 
                          @endif

                          <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" id="form-delete-categorias">
                              @method('DELETE')
                              @csrf

                              @if(Auth::user()->email === 'teste@gmail.com')
                                  <input type="submit" class="btn btn-outline-danger btn-sm disabled" id="btn-delete" value="Deletar" onclick="return false;" />
                              @else
                                <input type="submit" class="btn btn-outline-danger btn-sm com-margin-top" id="btn-delete" value="Deletar" onclick="return confirmDelete();" />
                              @endif
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
  <!--  end mainpanel -->


@endsection

@section('scripts')

  <!-- Script JS -->
  <script type="text/javascript">

    function confirmDelete() {
        if (confirm("Deseja realmente deletar essa Categoria?")) {
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



