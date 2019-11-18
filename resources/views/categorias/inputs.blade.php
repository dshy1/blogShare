 <div class="row mg-b-25">
    <div class="col-md-8">
      <div class="form-group">
        <label class="form-control-label">Nome: <span class="tx-danger">*</span></label>
      @isset($detalhe)
          <p id="nome" class="" >{{ $categoria['nome'] or 'Não Informado' }}</p>
      @else
        		<input class="form-control form-control-dark" type="text" name="firstname" value="" placeholder="Ex: direito bancário" />
         @endif
      </div>
    </div><!-- col-8 -->
 </div><!-- row -->

 <div class="row mg-b-25">
     <div class="col-md-8">
        <label class="form-control-label">Descrição:</label>
         @isset($detalhe)
          <p id="descricao" class="" >{{ $categoria['descricao'] or 'Não Informado' }}</p>
      @else
         		<textarea class="form-control form-control-dark" placeholder="Se desejar, faça uma breve descrição"></textarea>
         @endif
      </div><!-- col-8 -->
 </div><!-- row -->
