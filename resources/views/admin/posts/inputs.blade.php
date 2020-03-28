
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
        <label class="form-control-label cinza-claro">Imagem: <span class="tx-danger">*</span></label>
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

  // Select2 /////////////////////////////
   $(document).ready(function() {
      $('#categorias-wrapper').select2({
          placeholder: "Selecione uma ou mais categorias",
          maximumSelectionLength: 3
      });
    });

    // Check Editor /////////////////////////////
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
  var myDropzone = new Dropzone("div#myId", { url: "/file/post"});

  myDropzone.options.myAwesomeDropzone = {
      paramName: "image", // The name that will be used to transfer the file
      maxFilesize: 2, // MB
      accept: function(file, done) {
        if (file.name == "justinbieber.jpg") {
          done("Naha, you don't.");
        }
        else { done(); }
      }
    };

  </script> 

@stop


