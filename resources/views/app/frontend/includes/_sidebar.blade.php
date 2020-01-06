<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title')</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="template-front/css/bootstrap.css" media="screen"> 
    <link rel="stylesheet" type="text/css" href="template-front/css/magnific-popup.css" media="screen">
    <link rel="stylesheet" type="text/css" href="template-front/css/font-awesome.css" media="screen">
    <link rel="stylesheet" type="text/css" href="template-front/css/flexslider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="template-front/css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="template-front/css/responsive.css" media="screen">

    <style type="text/css">
      
      .menu-box {
        background: #009fe3;
        color: #fff;
      }
      ul.menu li a {
        color: #fff;
      }

    </style>

</head>

<body>
  

<!-- Container -->
<div id="container">
    <!-- Header
        ================================================== -->
    <header>
      <div class="logo-box">
        <a class="logo" href="#">
          <h1 style="color: #fff;">AgShare</h1>
          {{-- <img src="template-front/images/logo.png" alt="Share Comunicacao"> --}}
        </a>
        <p class="slogan">Mais resultado para sua empresa.</p>
      </div>

      <a class="elemadded responsive-link" href="#">Menu</a>

      <div class="menu-box">
        <ul class="menu">
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Serviços</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contato</a></li>
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
          <li><a href="#">Direito Civil</a></li>
          <li><a href="#">Direito Bancario</a></li>
          <li><a href="#">Direito Consumidor</a></li>
          <li><a href="#">Atualidades</a></li>
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
      <p class="copyright">&#169; 2020 Battuta, Todos os Direitos Reservados</p>
    </header>
    <!-- End Header -->




