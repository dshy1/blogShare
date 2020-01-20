
<style type="text/css">
  
  input[type='file'] {
    display: none
  }
  label.add-imagem{
    background-color: #3498db;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    margin: 10px;
    padding: 6px 20px; 
    margin-bottom: 15px;
  }
  #categorias-wrapper {
    min-width: 250px;
  }

</style>

<div class="row mg-b-10">
  <div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label cinza-claro">Cliente: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="titulo" class="" >{{ $portfolio->titulo or 'Não Informado' }}</p>
      @else
        <input class="form-control form-control-dark" type="text" name="titulo" value="{{ $portfolio->titulo ?? old('titulo') }}" placeholder="Digite o nome do cliente" />
      @endif
    </div>
  </div><!-- col-12 -->

  <div class="form-group">
      <input type="hidden" class="form-control" name="slug" />
  </div>  
</div><!-- row -->

<div class="row mg-b-10">
  <div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label cinza-claro">Texto: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="texto" class="">{{ $portfolio->texto or 'Não Informado' }}</p>
      @else
        <main>
            <textarea name="texto" id="editor" value="{{ $portfolio->texto ?? old('texto') }}">{{ $portfolio['texto'] ?? old('texto') }}</textarea>
        </main>
      @endif
    </div>
  </div><!-- col-12 -->
 </div><!-- row -->

<div class="row mg-b-10">
  <div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label cinza-claro">Site do cliente:</label>
      @isset($detalhe)
        <p id="url" class="" >{{ $portfolio->url or 'Não Informado' }}</p>
      @else
        <input class="form-control form-control-dark" type="text" name="url" value="{{ $portfolio->url ?? old('url') }}" placeholder="Ex: www.sharecomunicacao.com.br" />
      @endif
    </div>
  </div><!-- col-12 --> 
</div><!-- row -->

<div class="row mg-b-10">
  <div class="col-lg-8">
    <div class="custom-file">
      <label class="form-control-label cinza-claro marginT15">Imagem: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="imagem" class="">Detalhes da Imagem</p>
      @else
        @isset($portfolio)
          <label for='input-file' class="add-imagem">Selecionar Nova Imagem &#187;</label>
        @else
          <label for='input-file' class="add-imagem">Selecionar Imagem &#187;</label>
        @endif
          <input id='input-file' type='file' accept="image/png, image/jpeg" name="image" />
          <span id='file-name' class="cinza-claro">{{ $portfolio->image ?? old('image') }}</span>
      @endif
    </div>
  </div><!-- col-8 -->
</div><!-- row -->


  <!-- Script JS -->
  <script type="text/javascript">
  
    // ## Mostrar o path da imagem no span ao selecionar o arquivo
    // pega o input e o span
    var $input = document.getElementById('input-file'),
    $fileName  = document.getElementById('file-name');
    $fileName.textContent = 'Recomendado imagem de 1024x700.';

    // Qdo houver um change no input
    $input.addEventListener('change', function() {
      // Mostra o conteudo dele no span
      $fileName.textContent = this.value;

    });

  </script> 

