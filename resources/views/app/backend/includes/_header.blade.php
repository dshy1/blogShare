<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title')</title>
    
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset($path.'storage/images/home/favicon.png') }}" />

    <!-- Template Admin Backend -->
    <link rel="stylesheet" href="{{ asset($path.'template-dark/assets/libs/slick-slider/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset($path.'template-dark/assets/libs/slick-slider/slick/slick-theme.css') }}" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset($path.'template-dark/assets/css/bootstrap.min.css') }}" />
    <!-- Icons Css -->
    <link rel="stylesheet" href="{{ asset($path.'template-dark/assets/css/icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset($path.'template-dark/assets/css/app.min.css') }}" />    
    <!-- Meus estilos -->
    <link rel="stylesheet" href="{{ asset($path.'css/custom.css') }}" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset($path.'css/select2.min.css') }}" />
    <!-- Dropzone para upload de arquivo -->
    <link rel="stylesheet" href="{{ asset($path.'template-dark/assets/libs/dropzone/min/dropzone.min.css') }}" />
    

    <style type="text/css">

      .navbar-brand-box, #sidebar-menu {
        background: #27333a;
      }
      .logo-light {
        display: block;
      }
      .logo-lg img {
        width: 135px;
        height: auto;
        margin-top: 10px;
      }
      .app-search {
        position: absolute;
        left: 22%;
      }
      .app-search span {
        top: 17px;
      }
      .logout {
        display: flex;
        align-items: center;
      }

    </style>

</head>

<body>

  <div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="#" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset($path.'template-dark/assets/images/logo-sm-light.png') }}" alt="" height="22" />
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset($path.'template-dark/assets/images/share.png') }}" alt="" height="20" />
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="mdi mdi-backburger"></i>
                </button>

                <!-- App Search-->
                <form class="app-search">
                    <div>
                        <input type="text" class="form-control" placeholder="Pesquisar...">
                        <span class="mdi mdi-magnify"></span>
                    </div>
                </form>
            </div>

            <div class="d-flex">
                <div class="dropdown d-inline-block d-lg-none ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                        aria-labelledby="page-header-search-dropdown">
            
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-tune"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge badge-danger badge-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                        aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 font-weight-medium text-uppercase"> Notifications </h6>
                                </div>
                                <div class="col-auto">
                                    <span class="badge badge-pill badge-danger">New 3</span>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="#" class="text-reset notification-item">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                                            <i class="mdi mdi-cart"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="text-reset notification-item">
                                <div class="media">
                                    <img src="{{ asset($path.'template-dark/assets/images/users/avatar-3.jpg') }}"
                                        class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1">Andrew Mackie</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">It will seem like simplified English.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="text-reset notification-item">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title bg-success rounded-circle font-size-16">
                                            <i class="mdi mdi-package-variant-closed"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">One could refuse to pay expensive translators.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-reset notification-item">
                                <div class="media">
                                    <img src="assets/images/users/avatar-4.jpg"
                                        class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1">Dominic Kellway</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top">
                            <a class="btn-link btn btn-block text-center" href="javascript:void(0)">
                                <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ Auth::user()->image !== null ? asset($path.'storage/images/users/'.Auth::user()->image) : asset($path.'storage/images/users/avatar01.jpg') }}" alt="User Avatar" />
                        <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                        <div class="logout">
                            <i class="mdi mdi-logout font-size-16 align-middle mr-1"></i>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                
                                 @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



