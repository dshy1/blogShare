 
 <div class="row mg-b-10">
    <div class="col-md-8">
      <div class="form-group">
        <label class="form-control-label cinza-claro">Nome: <span class="tx-danger">*</span></label>
        @isset($detalhe)
          <p id="nome" class="" >{{ $categoria['nome'] or 'Não Informado' }}</p>
        @else
        	<input class="form-control form-control-dark" type="text" name="nome" value="{{ $categoria->nome  ?? old('nome') }}" placeholder="Ex: direito bancário" />
        @endif
      </div>
    </div>
 </div>

 <div class="row mg-b-10">
     <div class="col-md-8">
        <label class="form-control-label cinza-claro">Descrição:</label>
         @isset($detalhe)
          <p id="descricao" class="" >{{ $categoria['descricao'] or 'Não Informado' }}</p>
         @else
         		<textarea class="form-control form-control-dark" name="descricao" placeholder="Se desejar, faça uma breve descrição" value="{{ $categoria->descricao ?? old('descricao') }}"></textarea>
         @endif
      </div>
 </div>
