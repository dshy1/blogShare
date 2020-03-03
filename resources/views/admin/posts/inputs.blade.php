
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
      <label class="form-control-label col-md-12 cinza-claro">Categorias: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="categorias" class="">Detalhes Categorias</p>
      @else
        <select class="js-example-basic-multiple" multiple="multiple" name="categorias[]" id="categorias-wrapper">
           <option value="" disabled selected>Selecione</option>
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
  <div class="col-lg-8">
    <div class="custom-file">
      <label class="form-control-label col-md-12 cinza-claro marginT15">Imagem: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="imagem" class="">Detalhes da Imagem</p>
      @else
        @isset($post)
          <label for='input-file' id="teste">Selecionar Nova Imagem &#187;</label>
        @else
          <label for='input-file' id="teste">Selecionar Imagem &#187;</label>
        @endif
          <input id='input-file' type='file' accept="image/png, image/jpeg" name="image" />
          <span id='file-name' class="cinza-claro">{{ $post->image ?? old('image') }}</span>
          <img src="" id="teste-image" />
      @endif
    </div>
  </div>
</div>


<!-- Script JS -->
<script type="text/javascript">

  // ## Mostrar o path da imagem no span ao selecionar o arquivo
  // pega o input e o span
  var $input     = document.getElementById('input-file');
  var $fileName  = document.getElementById('file-name');
  var $teste     = document.getElementById('teste-image');
  $fileName.textContent = 'Recomendado imagem de 1024x700px.';

  // Qdo houver um change no input
  $input.addEventListener('change', function() {
    // Mostra o conteudo dele no span
    $fileName.textContent = this.value;
    $teste.setAttribute("src", $fileName);

  });

</script> 

