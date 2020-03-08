
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
      <label class="form-control-label cinza-claro">Categorias: (selecione) <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="categorias" class="">Detalhes Categorias</p>
      @else
        <select class="js-example-basic-multiple" multiple="multiple" name="categorias[]" id="categorias-wrapper">
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
      <label class="form-control-label cinza-claro marginT15">Imagem: <span class="tx-danger">*</span></label>
        {{-- @isset($post)
          <label for='input-file' id="teste1">Selecionar Nova Imagem &#187;</label>
        @else
          <label for='input-file' id="teste2">Selecionar Imagem &#187;</label>
        @endif --}}

          <div class="dropzone-input">
              <input id='input-file' type='file' accept="image/png, image/jpeg" name="image" />
              <label for='input-file' id="teste1" style="width: 100%;height: 150px;border:2px dashed #ced4da;text-align: center;">
              <div id="content-dropzone">
                <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                <h4>Drop files here to upload</h4>
              </div>

              <div id="content-dropzone-image" style="display: none;">
                <img src="" alt="image-preview" />
              </div>
            </label>
          </div>
       
         {{--  <span id='file-name' class="cinza-claro">{{ $post->image ?? old('image') }}</span>
          <img src="" id="teste-image" /> --}}
    </div>
  </div>
</div>


@section('scripts')

  <!-- Script JS -->
  <script type="text/javascript">


  // ### Select2 -->
   $(document).ready(function() {
      $('#categorias-wrapper').select2({
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

    // ### Mostrar preview da imagem ao selecionar uma imagem no input file
    // pega o input e as divs
    var input     = $('#input-file');
    var divDrop01 = $('#content-dropzone');
    var divDrop02 = $('#content-dropzone-image');
    // fileName.textContent = 'Recomendado imagem de 1024x700px.';

    // Qdo houver um change no input
    $("#input-file").change(function() {
      // esconde a div de texto
      $('#content-dropzone').hide();
      // mostra a div da imagem
      $('#content-dropzone-image').show();

      console.log($('#input-file').val());
      // $('#content-dropzone-image img').attr("src", $('#input-file').val());
      // console.log($('#input-file').val());

    });

  </script> 

@stop


