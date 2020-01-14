<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title')</title>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" type="text/css" href="{{ asset($caminho.'template-front/css/bootstrap.css') }}" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="{{ asset($caminho.'template-front/css/magnific-popup.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset($caminho.'template-front/css/font-awesome.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset($caminho.'template-front/css/flexslider.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset($caminho.'template-front/css/style.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset($caminho.'template-front/css/responsive.css') }}" media="screen" />


    <style type="text/css">
      
      .menu-box {
        background: #009fe3;
        color: #fff;
      }
      ul.menu li a {
        color: #fff;
      }
      .header-sidebar {
        height: 1200px!important;
      }
      a.link-branco {
        color: #787878;
      }
      .logo-box {
        padding: 39px 30px 27px;
      }

      .logo {
        width: 90%;
      }
      p.slogan {
        font-size: 16px;
        font-style: normal;
        line-height: 25px;
      }

      @media (max-width: 768px) {
        .header-sidebar {
          height: auto!important;
        }
      }

    </style>

</head>

<body>
  

<!-- Container -->
<div id="container">
    <!-- Header
        ================================================== -->
    <header class="{{ (request()->is('contato')) || (request()->is('blog')) || (request()->is('search')) || (request()->is('search/*')) ? 'header-sidebar' : '' }}">
      <div class="logo-box">
        <a class="logo" href="{{ route('site.index') }}">
          <img src="{{ asset($caminho.'images/brand/share.png') }}" class="logo" alt="Share Comunicacao" />
        </a>
        <p class="slogan">Marketing Digital que traz mais resultado para você e a sua empresa.</p>
      </div>

      <a class="elemadded responsive-link" href="#">Menu</a>

      <div class="menu-box">
        <ul class="menu">
          <li><a href="{{ route('site.index') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('site.sobre') }}" class="{{ (request()->is('sobre')) ? 'active' : '' }}">Sobre</a></li>
          <li><a href="{{ route('site.servicos') }}" class="{{ (request()->is('servicos')) ? 'active' : '' }}">Serviços</a></li>
          <li><a href="{{ route('site.lista') }}" class="{{ (request()->is('blog')) || (request()->is('post/*')) || (request()->is('search')) || (request()->is('search/*')) ? 'active' : '' }}">Blog</a></li>
          <li><a href="{{ route('site.contato') }}" class="{{ (request()->is('contato')) ? 'active' : '' }}">Contato</a></li>
        </ul>       
      </div>

      <div class="archives-box">
        <h2>Arquivos</h2>
        <ul class="archives">
          <li><a href="#">Dezembro 2019</a></li>
          <li><a href="#">Novembro 2019</a></li>
          <li><a href="#">Março 2019</a></li>
          <li><a href="#">Setembro 2017</a></li>
          <li><a href="#">Abril 2017</a></li>
          <li><a href="#">Janeiro 2017</a></li>
        </ul>       
      </div>
  
      <div class="categories-box">
        <h2>Categorias</h2>
        <ul class="categories">
          @foreach($categorias as $categoria)
            <li>
              <a href="{{ route('site.pesquisa.cat', ['id' => $categoria->id]) }}">{{ $categoria->nome }}</a>
            </li>         
          @endforeach
        </ul>
      </div>

      <div class="social-box">
        <ul class="social-icons">
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
          <li><a href="#"><i class="fa fa-rss-square"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
          <li><a href="#"><i class="fa fa-flickr"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
      <p class="copyright">&#169; 2020 Battuta & <span><a href="{{ route('login') }}" class="link-branco">jana.Blog</a></span>, Todos os Direitos Reservados</p>
    </header>
    <!-- End Header -->




