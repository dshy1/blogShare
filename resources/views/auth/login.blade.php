<!DOCTYPE html>
<html lang="pt-br">
  
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>jana.Blog | Login</title>
    
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset($caminho.'storage/images/home/favicon.png') }}" />

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- Template CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($caminho.'template-dark/css/bootstrap.min.css') }}" />
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($caminho.'template-dark/css/fontawesome.min.css') }}" />" />
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($caminho.'template-dark/css/pace-theme-minimal.css') }}" />" />
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($caminho.'template-dark/css/toastr.min.css') }}" />
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($caminho.'template-dark/css/core.css') }}" />
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($caminho.'template-dark/css/language.css') }}" />
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($caminho.'template-dark/css/default.css') }}" />

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
      input#password {
        margin-bottom: 0;
      }
      .slogan {
        margin-top: 10px;
      }
      .login-sidebar {
        margin-top: -15px;
      }
      .logo-share {
        width: 20%;
        margin-top: -180px;
        margin-bottom: 40px;
        position: relative;
        left: 40%;
      }

    </style>
    
  </head>

  <body class=" login " style=" background-image: url(images/bg_login.jpg);">
      <div class="container-fluid">
        <div class="row">
            <div class="faded-bg animated"></div>
            <div class="hidden-xs col-sm-7 col-md-8">
                <div class="clearfix">
                    <div class="col-sm-12 col-md-10 col-md-offset-2">
                        <div class="logo-title-container">
                            <div class="copy animated fadeIn">
                                <p>2020 &copy; jana.Blog Version: <span>1.0</span></p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-4 login-sidebar">
                <div class="login-container">
                    <img src="{{ asset($caminho.'images/brand/logo.png') }}" class="logo-share" />
                    <p>Faça login:</p>
                    <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8" class="login-form"><input name="_token" type="hidden" >
                        @csrf
                        <div class="form-group" id="emailGroup">
                            <label>E-mail</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Informe o e-mail" />
                             @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" id="passwordGroup">
                            <label>Senha</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Informe a senha" />
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <br />

                        <button type="submit" class="btn btn-block login-button">{{ __('LOGIN') }}</button>
                        <div class="clearfix"></div>

                        <br />

                        @if (Route::has('password.request'))
                          <p><a class="lost-pass-link" href="{{ route('password.request') }}">
                              {{ __('Esqueceu a senha?') }}
                          </a></p>
                        @endif

                       <p><a class="lost-pass-link" href="{{ route('site.lista') }}">{{ __('Voltar para o blog') }}</a></p>                        
                    </form>
                    <div style="clear:both"></div>
                </div> 
            </div> 
        </div> 
     </div>
  
     {{-- Scripts JS --}}
     <script type="text/javascript">
       var username = document.querySelector('[name="email"]');
        var password = document.querySelector('[name="password"]');
        username.focus();
        document.getElementById('emailGroup').classList.add('focused');

        // Focus events for email and password fields
        username.addEventListener('focusin', function(){
            document.getElementById('emailGroup').classList.add('focused');
        });
        username.addEventListener('focusout', function(){
            document.getElementById('emailGroup').classList.remove('focused');
        });

        password.addEventListener('focusin', function(){
            document.getElementById('passwordGroup').classList.add('focused');
        });
        password.addEventListener('focusout', function(){
            document.getElementById('passwordGroup').classList.remove('focused');
        });
     </script>
  </body>
</html>

