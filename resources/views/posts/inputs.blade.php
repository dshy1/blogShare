<div class="row mg-b-25">
  <div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Título: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="titulo" class="" >{{ $post->titulo or 'Não Informado' }}</p>
      @else
        <input class="form-control form-control-dark" type="text" name="titulo" value="{{ $post->titulo ?? old('titulo') }}" placeholder="Digite o título do post" />
      @endif
    </div>
  </div><!-- col-12 -->

  <div class="form-group">
      <input type="hidden" class="form-control" name="slug" />
  </div>  

  <div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Texto: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="texto" class="">{{ $post->texto or 'Não Informado' }}</p>
      @else
        <main>
            <textarea name="texto" id="editor" value="{{ $post->texto ?? old('texto') }}">{{ $post['texto'] ?? old('texto') }}</textarea>
        </main>
      @endif
    </div>
  </div><!-- col-12 -->

  <div class="col-lg-12">
    <div class="form-group mg-b-10-force form-categorias">
      <label class="form-control-label">Categorias: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="categorias" class="">Detalhes Categorias</p>
      @else
        <select class="form-control select2" data-placeholder="Choose country" multiple="multiple" name="categorias[]">
           @foreach($categorias as $categoria)
              <option value="{{ $categoria->id }}">{{ $categoria->nome }}
              </option>
           @endforeach
        </select>
      @endif
    </div>
  </div><!-- col-12 -->

  <div class="col-lg-8">
    <div class="custom-file">
      <label class="form-control-label">Imagem: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="imagem" class="">Detalhes da Imagem</p>
      @else
        <input type="file" accept="image/png, image/jpeg" class="custom-file-input"  id="validatedCustomFile" aria-describedby="inputGroupFileAddon04" name="image" value="{{ old('image') }}" placeholder="Tamanho recomendado: 100X100px" />
        <label class="custom-file-label" for="validatedCustomFile">Selecione uma imagem</label>
      @endif
    </div>
  </div><!-- col-8 -->
</div><!-- row -->

