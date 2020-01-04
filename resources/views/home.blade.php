@extends('layouts.main02')

@section('title', $cliente . ' | Dashboard')

@section('content')

<style type="text/css">

    .com-padding-top {
        padding-top: 100px;
    }
    .large {
        font-size: 78px;
        color: #18a4b4;
    }
    img.rounded-top {
    	min-width: 100%;
    	min-height: 225px;
    	max-height: 225px;
    	object-fit:cover;
    }
    figure {
    	overflow: hidden;
    }
    .data-bottom, .comments-bottom {
    	position: absolute;
    	bottom: 22px;
    }
    .profile-image {
      max-height: 112px;
      object-fit:cover;

    }

</style>

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item active">Home</span>
        </nav>
    </div>
    <!-- br-pageheader -->

    <div class="br-pagetitle">
        <i class="large material-icons">dashboard</i>
        <div>
            <h2 class="tx-white">Bem-vindo</h2>
            <p class="mg-b-0 cinza-claro">Aqui você pode navegar pelo seu painel de controle e fazer coisas incríveis</p>
        </div>
    </div>
    <!-- d-flex -->
	
  <!-- Lista dos 3 posts mais recentes -->
  @isset($posts)
  	<div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">
  	   <div class="card-deck card-deck-sm mg-x-0">
          @foreach($posts as $post)
    	      <div class="card bd-0 mg-0">
    	        <figure class="{{ Auth::user()->roles->first()->name == 'Admin' ? 'card-item-img bg-mantle rounded-top' : 'card-item-img bg-mantle rounded-top' }}">
                
    	          <img class="img-fluid rounded-top" src="{{ asset('storage/images/posts/'.$post->image) }}" alt="post image">
    	        </figure>
    	        <div class="card-body pd-25 bd bd-t-0 bd-white-1 rounded-bottom">
    	          <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">{{ $post->categorias[0]->nome }}</p>
    	          <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="{{ route('posts.show', $post->id) }}" class="tx-white hover-info">{{ $post->titulo }}</a></h5>
    	          <p class="tx-14 mg-b-25 cinza-claro">{{substr(strip_tags($post->texto), 0, 120) . '...' ?? 'Não Informado'}}</p>
    	          <p class="tx-13 mg-b-0 comments-bottom">
    	            <a href="#" class="tx-info">12 Likes</a>
    	            <a href="#" class="tx-info mg-l-5">23 Comments</a>
    	            <a href="#" class="tx-info mg-l-5"><i class="icon ion-more"></i></a>
    	          </p>
    	        </div><!-- card-body -->
    	      </div><!-- card -->
          @endforeach
        </div>

      @if($posts->isEmpty())
        <div class="card-deck card-deck-sm mg-x-0">
            <div class="card bd-0 mg-0">
              <div class="card-body pd-25 bd bd-t-0 bd-white-1 rounded-bottom">
                <h5 class="tx-normal tx-roboto lh-3 mg-b-15 alert-danger padding12">Você ainda não tem posts publicados</a></h5>
              </div><!-- card-body -->
            </div>
        </div>
      @endif
  @endif

  @can('cria-categoria')
  	<div class="row row-sm mg-t-20">
       <!-- Lista as Categorias -->
        <div class="col-lg-6">
          <div class="row no-gutters flex-row-reverse widget-3 rounded">
            <div class="col-md-5 col-lg-6 col-xl-5">
              <figure class="ht-200 ht-md-100p">
                <img src="{{ asset('storage/images/home/img31.jpg') }}" class="img-fit-cover op-8" alt="">
              </figure>
            </div><!-- col-md-5 -->
            <div class="col-md-7 col-lg-6 col-xl-7 bg-br-primary pd-25-force d-flex align-items-start flex-column">
              <p class="tx-11 tx-mont tx-uppercase tx-semibold tx-success">Categorias</p>
              <h5 class="tx-normal tx-roboto tx-lg-16-force tx-xl-20-force lh-3 mg-b-15"><a href="{{ route('categorias.index') }}" class="tx-white">Aqui você pode criar e separar seus posts por categorias</a>
              </h5>
              @isset($categorias)
                @foreach($categorias as $categoria)
                  <li class="tx-gray-600">{{ $categoria->nome }}</li>
                @endforeach
              @else
                <p class="tx-14 tx-gray-600 mg-b-auto">Não existe nenhuma categoria cadastrada no sistema.</p>
              @endif  
              <span class="d-block mg-t-20 tx-13 data-bottom">{{ \Carbon\Carbon::now()->format('d/m/Y')}}</span>
            </div><!-- col-md-7 -->
          </div><!-- row -->
        </div><!-- col-lg-6 -->
  	
  	    <!-- Lista de Usuários -->
        <div class="col-lg-6 mg-t-20 mg-lg-t-0-force">
          <div class="row no-gutters widget-3 rounded">
            <div class="col-md-5 col-lg-6 col-xl-5">
              <figure class="ht-200 ht-md-100p">
                <img src="{{ asset('storage/images/home/img32.jpg') }}" class="img-fit-cover op-8" alt="">
              </figure>
            </div><!-- col-4 -->
            <div class="col-md-7 col-lg-6 col-xl-7 bg-br-primary pd-25-force d-flex align-items-start flex-column">
              <p class="tx-11 tx-mont tx-uppercase tx-semibold tx-pink">Autores</p>
              <h5 class="tx-normal tx-roboto tx-lg-16-force tx-xl-20-force lh-3 mg-b-15"><a href="{{ route('users.index') }}" class="tx-white">Aqui você pode criar mais colaboradores para seu blog</a>
              </h5>
              @isset($users)
  	            @foreach($users as $user)
  	            	<li class="tx-gray-600">{{ $user->name }}</li>
  	            @endforeach
          	  @else
  	            <p class="tx-14 tx-gray-600 mg-b-auto">Não existe nenhum usuário cadastrado no sistema.</p>
          	  @endif	
              <span class="d-block mg-t-20 tx-13 data-bottom">{{ \Carbon\Carbon::now()->format('d/m/Y')}}</span>
            </div><!-- col-8 -->
          </div><!-- row -->
        </div><!-- col-lg-6 -->
    </div><!-- row -->
  @endcan
	
	<!-- Post Destaque com mais Comentarios // isso vai vir do Front End -->
  @isset($post)
    <div class="row row-sm mg-t-20">
      <div class="col-lg-8">
        <div class="card card-inverse bd-0 mg-b-20 ht-400 ht-xs-350 ht-lg-100p">
            <img class="wd-100p ht-100p object-fit-cover rounded" src="{{ asset('storage/images/posts/'.$post->image) }}" alt="post image">
            <div class="pos-absolute a-0 pd-b-30 bg-black-5 rounded d-flex align-items-sm-center justify-content-center">
              <div class="tx-center wd-80p mg-t-25 mg-sm-t-0">
                <p class="tx-info tx-uppercase tx-mont tx-semibold tx-11">{{ $post->categorias[0]->nome }}</p>
                <h3 class="tx-center lh-4 tx-light tx-roboto"><a href="#" class="tx-white-8 hover-white">Post de Maior Destaque do Blog</a></h3>
              </div>
            </div><!-- pos-absolute d-flex -->

            <div class="pos-absolute b-0 x-0 pd-y-15 pd-x-25 bd-t bd-white-1">
              <div class="d-sm-flex justify-content-between align-items-center tx-13">
                <span class="d-block tx-white-8 mg-r-5">{{ \Carbon\Carbon::now()->format('d/m/Y')}}</span>
                <a href="#" class="d-block tx-white-8 hover-white mg-r-10"><i class="fa fa-heart-o mg-r-5"></i> 23 Likes</a>
                <a href="#" class="d-block tx-white-8 hover-white"><i class="fa fa-comment-o mg-r-5"></i> 4 Comments</a>
                <span class="cinza-claro">By: <a href="#" class="tx-white-8 hover-white">{{ $post->autor->name }}</a></span>
              </div><!-- d-flex -->
            </div><!-- pos-absolute-bottom -->
          </div><!-- card -->
      </div><!-- col-8 -->

      <div class="col-lg-4">
        <div class="card bd-gray-400 pd-25 ht-100p">
          <div class="media mg-b-25">
            <!-- Aqui vai a imagem e nome do autor do post em destaque -->
            <img src="{{ asset('storage/images/users/avatar01.jpg') }}" class="d-flex wd-40 rounded-circle mg-r-15" alt="profile image">
            <div class="media-body mg-t-2">
              <h6 class="mg-b-5 tx-14"><a href="#" class="tx-white">{{ $post->autor->name }}</a></h6>
              <div class="tx-12">{{ \Carbon\Carbon::now()->format('d/m/Y')}}</div>
            </div><!-- media-body -->
          </div><!-- media -->
          <h5 class="tx-normal tx-roboto mg-b-15 lh-4"><a href="#" class="tx-white hover-info">{{ $post->titulo }}</a></h5>
          <p class="tx-14 mg-b-25 cinza-claro">{{substr(strip_tags($post->texto), 0, 150) . '...' ?? 'Não Informado'}}</p>
          <p class="mg-t-auto mg-b-0 tx-13">
            <a href="#" class="tx-info">18 Likes</a>
            <a href="#" class="tx-info mg-l-20">1 Comment</a>
          </p>
        </div><!-- card -->
      </div><!-- col-4 -->
    </div><!-- row -->
  @endif
	
	  <!-- Perfil do Usuário-->
    <div class="card mg-t-20 widget-4">
      <div class="card-header">
        <div class="tx-24 hidden-xss-down">
          <a href="#" class="mg-r-10"><i class=""></i></a>
          <a href="#"><i class=""></i></a>
        </div>
      </div><!-- card-header -->
      <div class="card-body">
        <div class="card-profile-img">
          <img src="{{ Auth::user()->image !== null ? asset('storage/images/users/'.Auth::user()->image) : asset('storage/images/users/avatar01.jpg') }}" alt="user image" class="profile-image">          
        </div><!-- card-profile-img -->

        <h4 class="tx-normal tx-roboto tx-white">{{ Auth::user()->name }}</h4>
        <p class="mg-b-25 cinza-claro">{{ Auth::user()->email }}</p>
      </div><!-- card-body -->
      <div class="card-footer tx-14 d-sm-flex justify-content-sm-center">
        <nav class="nav nav-inline flex-column flex-sm-row">
          <a href="{{ route('users.edit', Auth::user()->id) }}" class="nav-link">
          	<button class="btn btn-outline-primary">Ver Perfil</button>
          </a>
        </nav>
      </div><!-- card-footer -->
    </div><!-- card -->
  </div><!-- br-pagebody-->
</div><!-- end mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
