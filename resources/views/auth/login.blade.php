<!DOCTYPE html>
<html lang="pt-br">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Meta -->
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>jana.Blog | Login</title>
    
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset($caminho.'storage/images/home/favicon.png') }}" />

    <!-- Template Bkt CSS -->
    <link rel="stylesheet" href="{{ asset($caminho.'template-dark/css/bkt.css') }}" />
    <link rel="stylesheet" href="{{ asset($caminho.'template-dark/css/bkt.dark.css') }}" />
    <!-- Meus estilos -->
    <link rel="stylesheet" href="{{ asset($caminho.'css/custom.css') }}" />

    <style type="text/css">
      
      .tx-35 {
        font-size: 35px!important;
      }
      a.btn-link {
        padding: 4px 15px;
      }
      .btn-login {
        padding: 17px;
        margin-bottom: 15px;
      }
      .form-group input {
        height: 60px;
      }
      .slogan {
        margin-top: 10px;
      }

    </style>
    
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
        <img src="{{ asset($caminho.'template-dark/img/bg04.jpg') }}" class="wd-100p ht-100p object-fit-cover" alt="">
        <div class="overlay-body bg-black-6 d-flex align-items-center justify-content-center">
            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bd bd-white-2 bg-black-7" id="login-wrapper">
              <div class="signin-logo tx-center tx-35 tx-bold tx-white"><span class="tx-normal"></span> jana.<span class="tx-normal" style="color: #11b7d2;">Blog</span></div>
              <div class="tx-white-5 tx-center mg-b-60 slogan">Porque Seu Sistema Tem Que Ser <span>Deslumbrante</span></div>
            
                 <form method="POST" action="{{ route('login') }}">
                    @csrf
                      <div class="form-group">
                        <input id="email" type="email" class="form-control fc-outline-dark{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Informe o e-mail" />
                         @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div><!-- form-group -->
                      

                      <div class="form-group links-senha-voltar">
                        <input id="password" type="password" class="form-control fc-outline-dark{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Informe a senha" />
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        
                         <button type="submit" class="btn btn-info btn-block btn-login">{{ __('LOGIN') }}</button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Esqueceu a senha?') }}
                            </a>
                        @endif

                        <br /><a class="btn btn-link" href="{{ route('site.lista') }}">{{ __('Voltar para o blog') }}</a>
                      </div><!-- form-group --> 
                  </form>
            </div><!-- login-wrapper -->
        </div><!-- overlay-body -->
    </div>
  </body>
</html>

