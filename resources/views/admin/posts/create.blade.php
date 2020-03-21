@extends('layouts.main-back')

@section('title', $plataforma. ' | Criar Novo Post')

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
      .x-large {
        font-size: 92px;
      }
      .form-layout-footer {
        margin-top: 60px;
      }
      .titulo-pagina {
        font-size: 25px!important;
      }
      .header-title {
        margin-bottom: 35px;
      }
      hr {
        margin-top: 130px!important;
      }

  </style>


  <!-- ########## START: MAIN PANEL ########## -->
  <div class="main-content">
      <div class="page-content">
          <div class="container-fluid">

              <!-- start page title -->
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <h4 class="mb-0 font-size-18 titulo-pagina">Novo Post</h4>

                          <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                  <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Posts</a></li>
                                  <li class="breadcrumb-item active">Novo Post</li>
                              </ol>
                          </div>

                      </div>
                  </div>
              </div>
              <!-- end page title -->

              @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
              @endif

              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                            <h4 class="header-title">Crie Posts Incríveis para seu Blog</h4>
                           
                             <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" >
                                  @csrf
                                  {{ method_field('POST') }}

                                  @include('admin.posts.inputs', ['post' => null, 'detalhe' => null])
                                  <hr>
                               
                                <div class="form-layout-footer">
                                    <input type="submit" class="btn btn-primary" value="Salvar Post" onclick="return true;" />
                                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
                                </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Page-content -->
  </div>

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


