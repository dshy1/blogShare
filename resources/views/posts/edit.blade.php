@extends('layouts.main02')

@section('title', 'Editar Post')

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
      font-size: 78px;
      color: #18a4b4;
    }

</style>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="#">Home</a>
      <a class="breadcrumb-item" href="#">Posts</a>
      <span class="breadcrumb-item active">Editar Post</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagetitle">
    <i class="large material-icons">bookmark_border</i>
    <div>
      <h2 class="tx-white">Editar Post</h2>
      <p class="mg-b-0 cinza-claro">Edite seu post e deixe-o mais incrível ainda</p>
    </div>
  </div><!-- d-flex -->

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
                <form id="form-posts-edit" name="form-posts-edit" action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    {{method_field('PATCH')}}

                    @include('posts.inputs', ['post' => $post, 'detalhe' => null])

                  <div class="form-layout-footer marginT70">
                    <input type="submit" class="btn btn-primary" value="Atualizar Post" />
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
                  </div><!-- form-layout-footer -->
                </form>
            </div><!-- form-layout -->
        </div><!-- bd -->
    </div>
  </div>

</div><!--  end mainpanel -->

@endsection


@section('scripts')

  <!-- Script JS -->

  <script type="text/javascript">
  
    // ---  Multi select-->
    $(".select2").select2({
        maximumSelectionLength: 3
    });

    // --- Editor Texto -->
    ClassicEditor.create( document.querySelector( '#editor' ), {
          // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
    } )
      .then( editor => {
          window.editor = editor;
    } )
      .catch( err => {
          console.error( err.stack );
    } );

    // initSample();

  </script> 

@endsection


