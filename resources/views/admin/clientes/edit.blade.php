@extends('layouts.main-back')

@section('title', $plataforma. ' | Editar Cliente')

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
      .form-categorias {
        width: 50%;
      }
      .custom-file-label {
        margin-top: 25px;
      }
      .large {
        font-size: 77px;
      }

  </style>


  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('clientes.index') }}">Clientes</a>
        <span class="breadcrumb-item active">Editar Cliente</span>
      </nav>
    </div>

    <div class="br-pagetitle">
      <i class="large material-icons cor-icones">edit</i>
      <div>
        <h2 class="tx-white">Editar Cliente</h2>
        <p class="mg-b-0 cinza-claro">Edite o cliente para exibir no seu portfolio</p>
      </div>
    </div>

    @if($errors->any())
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
              <div class="form-layout form-layout-1">
                  <form id="form-posts-edit" name="form-posts-edit" action="{{ route('clientes.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">

                      @csrf
                      {{method_field('PATCH')}}

                      @include('clientes.inputs', ['portfolio' => $portfolio, 'detalhe' => null])

                    <div class="form-layout-footer marginT70">
                      @if(Auth::user()->email === 'teste@gmail.com')
                        <input type="submit" class="btn btn-primary disabled" value="Salvar Alterações" onclick="return false;" />
                      @else
                        <input type="submit" class="btn btn-primary" value="Salvar Alterações" onclick="return true;" />
                      @endif
                      <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
  </div>
  <!--  end mainpanel -->
  

@endsection

@section('scripts')

    <!-- Script JS -->
    <script type="text/javascript">

        // ## Check Editor -->
        ClassicEditor.create( document.querySelector( '#editor' ), {
          // Aqui determina o que vai aparecer na caixa de ferramentas
          toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
          heading: {
              options: [
                  { model: 'paragraph', title: 'Parágrafo', class: 'ck-heading_paragraph' },
                  { model: 'heading1', view: 'h1', title: 'Título 1', class: 'ck-heading_heading1' },
                  { model: 'heading2', view: 'h2', title: 'Título 2', class: 'ck-heading_heading2' },
                  { model: 'heading3', view: 'h3', title: 'Título 3', class: 'ck-heading_heading3' }

            ]
          }
        }) 
        .catch( error => {
              console.error( error );
        });

    </script> 

@stop



