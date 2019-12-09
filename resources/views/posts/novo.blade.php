@extends('layouts.main02')

@section('title', 'Novo Post')

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

</style>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="#">Home</a>
      <a class="breadcrumb-item" href="#">Posts</a>
      <span class="breadcrumb-item active">Novo Post</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagetitle">

    <!-- <i class="icon ion-ios-gear-outline"></i> -->
    <div>
      <h4>Posts</h4>
      <p class="mg-b-0">Vamos criar um novo post</p>
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

  <div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="bd bd-white-1 rounded table-responsive">
            <div class="form-layout form-layout-1">
              <div class="row mg-b-25">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label">Título: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-dark" type="text" name="titulo" value="" placeholder="Enter firstname">
                  </div>
                </div><!-- col-12 -->

                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label">Texto: <span class="tx-danger">*</span></label>
                    <textarea name="texto" id="editor" >{{ old('texto') }}</textarea>
                  </div>
                </div><!-- col-12 -->

                <div class="col-lg-12">
                  <div class="form-group mg-b-10-force form-categorias">
                    <label class="form-control-label">Categorias: <span class="tx-danger">*</span></label>
                    <select class="form-control select2" data-placeholder="Choose country" multiple="multiple">
                      <option label="Choose country"></option>
                      <option value="USA">United States of America</option>
                      <option value="UK">United Kingdom</option>
                      <option value="China">China</option>
                      <option value="Japan">Japan</option>
                    </select>
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-8">
                  <div class="form-group mg-b-10-force">
                    <input type="file" class="custom-file-input"  id="validatedCustomFile" aria-describedby="inputGroupFileAddon04" name="image" value="{{ old('image') }}" />
                    <label class="custom-file-label" for="validatedCustomFile">Selecione uma imagem</label>
                  </div>
                </div><!-- col-8 -->

              </div><!-- row -->

              <div class="form-layout-footer">
                <button class="btn btn-primary">Salvar post</button>
                <button class="btn btn-secondary">Cancelar</button>
              </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </div><!-- bd -->
    </div>
  </div>

</div><!--  end mainpanel -->



<!-- Script JS -->
<script type="text/javascript">

 // Ckeditor
 ClassicEditor
  .create( document.querySelector( '#editor' ), {
    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
  } )
  .then( editor => {
    window.editor = editor;
  } )
  .catch( err => {
    console.error( err.stack );
  } );

</script>


@endsection
