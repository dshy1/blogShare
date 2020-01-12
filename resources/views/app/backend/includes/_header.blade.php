<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title')</title>
    
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset($caminho.'storage/images/home/favicon.png') }}" />

    <!-- Styles -->

    <!-- Template Bkt CSS -->
    <link rel="stylesheet" href="{{ asset($caminho.'template-dark/css/bkt.css') }}" />
    <link rel="stylesheet" href="{{ asset($caminho.'template-dark/css/bkt.dark.css') }}" />

    <!-- Multi select -->
    <link rel="stylesheet" href="{{ asset($caminho.'css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset($caminho.'css/samples.css') }}" />
    <!-- Meus estilos -->
    <link rel="stylesheet" href="{{ asset($caminho.'css/custom.css') }}" />
    
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Jquery -->
    <script src="{{ asset($caminho.'js/jquery.min.js') }}"></script>

    <style type="text/css">

      .nav-link-profile {
        margin-right: 35px!important;
      }
      .center12 {
        position: relative;
        left: 12%;
      }
      .center30 {
        position: relative;
        left: 30%;
      }
      .paddingT0 {
        padding-top: 0!important;
      }
      .dropdown-user {
        margin-right: 7%;
      }
      img.rounded-header {
        width: 32px;
        height: 32px;
        border-radius: 100%;
        object-fit:cover;
      }

    </style>


 <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="material-icons">subject</i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="material-icons">subject</i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Pesquisar" />
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button">
              <i class="material-icons">search</i>
            </button>
          </span>
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          
          <div class="dropdown">
            <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="material-icons">notifications</i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header">
              <div class="dropdown-menu-label">
                <label>Notificações</label>
              </div><!-- d-flex -->
              <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link read">
                  <div class="media">
                    <img src="../img/img8.jpg" alt="">
                    <div class="media-body">
                      <p class="noti-text"><strong>Suzzeth Bungaos</strong> curtiu seu post.</p>
                      <span>03 Outubro, 2017 8:45h</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="#" class="media-list-link read">
                  <div class="media">
                    <img src="../img/img9.jpg" alt="">
                    <div class="media-body">
                      <p class="noti-text"><strong>Mellisa Brown</strong> comentou no seu post. <strong>Direito do Consumidor para Todos</strong></p>
                      <span>05 Outubro, 2017 10:00h</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-footer">
                  <a href="#"><i class="fa fa-angle-down"></i>Ver todas</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->

          <div class="dropdown">
            <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">{{ Auth::user()->name }}</span>
              <!-- imagem do usuario logado do header -->
              <img src="{{ Auth::user()->image !== null ? asset($caminho.'storage/images/users/'.Auth::user()->image) : asset($caminho.'storage/images/users/avatar01.jpg') }}" class="wd-32 rounded-circle rounded-header" alt="user image" />
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250 paddingT0 dropdown-user">
              <div class="tx-center">
                <h6 class="logged-fullname">{{ Auth::user()->name }}</h6>
                <p>{{ Auth::user()->email }}</p>
              </div>
              <hr>
              <ul class="list-unstyled user-profile-nav">
                <li class="center12"><a href="{{ route('users.edit', Auth::user()->id) }}"><i class="icon ion-ios-gear"></i>Configurações</a></li>
                <li class="center30"><a id="logout" href="{{ route('logout') }}" class="icon ion-power" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->


