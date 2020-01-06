 
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

</style>

 <div class="row mg-b-10">
    <div class="col-md-8">
      <div class="form-group">
        <label class="form-control-label cinza-claro">Nome: <span class="tx-danger">*</span></label>
        <input class="form-control form-control-dark" type="text" name="name" value="{{ $user->name  ?? old('nome') }}" placeholder="Digite o nome" />
      </div>
    </div><!-- col-8 -->
 </div><!-- row -->

 <div class="row mg-b-10">
    <div class="col-md-8">
      <div class="form-group">
        <label class="form-control-label cinza-claro">E-mail: <span class="tx-danger">*</span></label>
        @isset($user)
          <input class="form-control form-control-dark" type="text" name="email" value="{{ $user->email  ?? old('email') }}" placeholder="Digite um e-mail válido" disabled="" />
        @else
          <input class="form-control form-control-dark" type="text" name="email" value="{{ $user->email  ?? old('email') }}" placeholder="Digite um e-mail válido" />
        @endif
      </div>
    </div><!-- col-8 -->
 </div><!-- row -->

@isset($user)
   <div class="row mg-b-10">
      <div class="col-md-8">
        <div class="form-group">
          <label class="form-control-label cinza-claro">Nova Senha: <span class="tx-danger">*</span></label>
          <input class="form-control form-control-dark" type="password" name="password" value="{{ old('password') }}" minlength=8 placeholder="Mínimo 8 caracteres" />
        </div>
      </div><!-- col-8 -->
   </div><!-- row -->

   <div class="row mg-b-10">
      <div class="col-md-8">
        <div class="form-group">
          <label class="form-control-label cinza-claro">Confirmar Nova Senha: <span class="tx-danger">*</span></label>
          <input class="form-control form-control-dark" type="password" name="password-confirm" value="{{ old('password-confirm') }}" placeholder="" />
        </div>
      </div><!-- col-8 -->
   </div><!-- row -->

   <div class="row mg-b-10">
      <div class="col-lg-8">
        <div class="custom-file">
            <label class="form-control-label cinza-claro marginT15">Imagem: <span class="tx-danger">*</span></label>
            <label for='input-file' id="teste">Selecionar Nova Imagem &#187;</label>
            <input id='input-file' type='file' accept="image/png, image/jpeg" name="image" />
            <span id='file-name' class="cinza-claro">{{ $user->image ?? old('image') }}</span>
        </div>
      </div><!-- col-8 -->
   </div><!-- row -->
@endif




 <!-- Script JS -->
  <script type="text/javascript">
  
    // Mostrar o path da imagem no span ao selecionar o arquivo
    var $input = document.getElementById('input-file'),
    $fileName  = document.getElementById('file-name');

    $input.addEventListener('change', function() {

      $fileName.textContent = this.value;

    });

  </script> 