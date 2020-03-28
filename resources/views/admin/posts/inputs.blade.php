
<style type="text/css">
  
  input[type='file'] {
    display: none
  }
  label#teste {
    background-color: #3498db;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    margin: 10px;
    padding: 6px 20px; 
    margin-bottom: 15px;
  }
  #categorias-wrapper {
    min-width: 450px;
  }
 
</style>

<div class="row mg-b-10">
  <div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label cinza-claro">Título: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="titulo" class="" >{{ $post->titulo or 'Não Informado' }}</p>
      @else
        <input class="form-control form-control-dark" type="text" name="titulo" value="{{ $post->titulo ?? old('titulo') }}" placeholder="Título do post" />
      @endif
    </div>
  </div>

  <div class="form-group">
      <input type="hidden" class="form-control" name="slug" />
  </div>  
</div>

<div class="row mg-b-10">
  <div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label cinza-claro">Texto: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="texto" class="">{{ $post->texto or 'Não Informado' }}</p>
      @else
        <main>
            <textarea name="texto" id="editor" value="{{ $post->texto ?? old('texto') }}">{{ $post['texto'] ?? old('texto') }}</textarea>
        </main>
      @endif
    </div>
  </div>
 </div>

<div class="row mg-b-10">
  <div class="col-lg-12">
    <div class="form-group mg-b-10-force form-categorias">
      <label class="form-control-label cinza-claro">Categorias: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="categorias" class="">Detalhes Categorias</p>
      @else
        <select class="js-example-basic-multiple" multiple="multiple" name="categorias[]" id="categorias-wrapper" value="teste">
           @foreach($categorias as $categoria)
              <option value="{{ $categoria->id }}" {{ isset($catgs_post) && in_array($categoria->id, $catgs_post) ? 'selected="selected"' : '' }} >{{ $categoria->nome }}
              </option>
           @endforeach
        </select>
      @endif
    </div>
  </div>
</div>

<div class="row mg-b-10">
  <div class="col-lg-12">
    <div class="custom-file">
      <div class="dz-message needsclick">
        <button type="button" class="dz-button">Drop files here or click to upload.</button>
      </div>
      </div>
    </div>
  </div>
</div>


@section('scripts')

  <!-- Script JS -->
  <script type="text/javascript">

  // ### Select2 -->
   $(document).ready(function() {
      $('#categorias-wrapper').select2({
          placeholder: "Selecione uma ou mais categorias",
          maximumSelectionLength: 3
      });
    });

    // ### Check Editor -->
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

   

 // Dropzone /////////////////////////////
   Dropzone.options.formPhoto = {
      autoProcessQueue: false,
      maxFilesize: 10,
      maxThumbnailFilesize: 10,
      maxFiles: 1,
      parallelUploads: 2,
      timeout: 3600000, //1h
      addRemoveLinks: true,
      dictRemoveFile: 'Effacer',
      acceptedFiles: '.jpg, .jpeg, .png',
      init: function() {
        var submitButton = document.querySelector("#teste")
        myDropzone = this; // closure
        submitButton.addEventListener("click", function() {
          myDropzone.processQueue();
        });
        // files are dropped here:
        this.on("addedfile", function() {
        });
        this.on('error', function(file, errorMessage) {
            if (errorMessage.indexOf('Error 404') !== -1) {
                var errorDisplay = document.querySelectorAll('[dz-error-message]');
                errorDisplay[errorDisplay.length - 1].innerHTML = 'Error 404: The upload page was not found on the server';
            }
            if (errorMessage.indexOf('File is too big') !== -1) {
                toastr.warning("La taille de l'image ne doit pas dépasser 10MB. Format accepté .jpg, .png, .jpeg. Image non enregistré");
                // i remove current file
                this.removeFile(file);
            }
        });
        this.on("complete", function (file, response) {
          if(response==0){
            toastr.warning("La taille de l'image ne doit pas dépasser 10MB. Format accepté jpg,png,jpeg. Image non enregistré");
          }else{
            toastr.success("Enregistrement effectué");
            loadImg();
          }
        });
      }
    }

  </script> 

@stop


