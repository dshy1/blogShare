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
        <i class="large material-icons">bookmark_border</i>
        <div>
            <h2 class="tx-white">Bem-vindo</h2>
            <p class="mg-b-0 cinza-claro">Aqui você pode navegar pelo seu painel de controle e fazer coisas incríveis</p>
        </div>
    </div>
    <!-- d-flex -->
	
	<!-- Lista dos 3 posts mais recentes -->
	<div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">
	   <div class="card-deck card-deck-sm mg-x-0">
	      <div class="card bd-0 mg-0">
	        <figure class="card-item-img bg-mantle rounded-top">
	          <img class="img-fluid rounded-top" src="{{ asset('storage/images/posts/'.$posts[0]->image) }}" alt="post image">
	        </figure>
	        <div class="card-body pd-25 bd bd-t-0 bd-white-1 rounded-bottom">
	          <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">{{ $posts[0]->categorias[0]->nome }}</p>
	          <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="#" class="tx-white hover-info">{{ $posts[0]->titulo }}</a></h5>
	          <p class="tx-14 mg-b-25 cinza-claro">{{substr(strip_tags($posts[0]->texto), 0, 120) . '...' ?? 'Não Informado'}}</p>
	          <p class="tx-13 mg-b-0">
	            <a href="#" class="tx-info">12 Likes</a>
	            <a href="#" class="tx-info mg-l-5">23 Comments</a>
	            <a href="#" class="tx-info mg-l-5"><i class="icon ion-more"></i></a>
	          </p>
	        </div><!-- card-body -->
	      </div><!-- card -->

	      <div class="card bd-0 mg-0">
	        <figure class="card-item-img bg-dance rounded-top">
	          <img class="img-fluid rounded-top" src="{{ asset('storage/images/posts/'.$posts[1]->image) }}" alt="post image">
	        </figure>
	        <div class="card-body pd-25 bd bd-t-0 bd-white-1 rounded-bottom">
	          <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">{{ $posts[1]->categorias[0]->nome }}</p>
	          <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="#" class="tx-white hover-info">{{ $posts[1]->titulo }}</a></h5>
	          <p class="tx-14 mg-b-25 cinza-claro">{{substr(strip_tags($posts[1]->texto), 0, 120) . '...' ?? 'Não Informado'}}</p>
	          <p class="tx-13 mg-b-0">
	            <a href="#" class="tx-info">40 Likes</a>
	            <a href="#" class="tx-info mg-l-5">17 Comments</a>
	            <a href="#" class="tx-info mg-l-5"><i class="icon ion-more"></i></a>
	          </p>
	        </div><!-- card-body -->
	      </div><!-- card -->

	      <div class="card bd-0 mg-0">
	        <figure class="card-item-img bg-transfile rounded-top">
	          <img class="img-fluid rounded-top" src="{{ asset('storage/images/posts/'.$posts[2]->image) }}" alt="post image">
	        </figure>
	        <div class="card-body pd-25 bd bd-t-0 bd-white-1 rounded-bottom">
	          <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">{{ $posts[2]->categorias[0]->nome }}</p>
	          <h5 class="tx-normal tx-roboto lh-3 mg-b-15"><a href="#" class="tx-white hover-info">{{ $posts[2]->titulo }}</a></h5>
	          <p class="tx-14 mg-b-25 cinza-claro">{{substr(strip_tags($posts[2]->texto), 0, 120) . '...' ?? 'Não Informado'}}</p>
	          <p class="tx-13 mg-b-0">
	            <a href="#" class="tx-info">32 Likes</a>
	            <a href="#" class="tx-info mg-l-5">33 Comments</a>
	            <a href="#" class="tx-info mg-l-5"><i class="icon ion-more"></i></a>
	          </p>
	        </div><!-- card-body -->
	   </div><!-- card-deck-->
	</div><!-- br-pagebody-->
	
	<!-- Lista as Categorias -->
	<div class="row row-sm mg-t-20">
      <div class="col-lg-6">
        <div class="row no-gutters flex-row-reverse widget-3 rounded">
          <div class="col-md-5 col-lg-6 col-xl-5">
            <figure class="ht-200 ht-md-100p">
              <img src="{{ asset('storage/images/home/img31.jpg') }}" class="img-fit-cover op-8" alt="">
            </figure>
          </div><!-- col-md-5 -->
          <div class="col-md-7 col-lg-6 col-xl-7 bg-br-primary pd-25-force d-flex align-items-start flex-column">
            <p class="tx-11 tx-mont tx-uppercase tx-semibold tx-success">Categorias</p>
            <h5 class="tx-normal tx-roboto tx-lg-16-force tx-xl-20-force lh-3 mg-b-15"><a href="{{ route('categorias.index') }}" class="tx-white">Aqui você pode criar e separar seus posts por categorias</a></h5>
            @foreach($categorias as $categoria)
            	<p class="tx-14 tx-gray-600 mg-b-auto">{{ $categoria->nome }}</p>
            @endforeach
            <span class="d-block mg-t-20 tx-13">Mar 11, 2017, 2:30pm</span>
          </div><!-- col-md-7 -->
        </div><!-- row -->
      </div><!-- col-lg-6 -->
      <div class="col-lg-6 mg-t-20 mg-lg-t-0-force">
        <div class="row no-gutters widget-3 rounded">
          <div class="col-md-5 col-lg-6 col-xl-5">
            <figure class="ht-200 ht-md-100p">
              <img src="{{ asset('storage/images/home/img32.jpg') }}" class="img-fit-cover op-8" alt="">
            </figure>
          </div><!-- col-4 -->
          <div class="col-md-7 col-lg-6 col-xl-7 bg-br-primary pd-25-force d-flex align-items-start flex-column">
            <p class="tx-11 tx-mont tx-uppercase tx-semibold tx-pink">History</p>
            <h5 class="tx-normal tx-roboto tx-lg-16-force tx-xl-20-force lh-3 mg-b-15"><a href="#" class="tx-white">17 Brilliant Short Novels You Can Read in a Sitting</a></h5>
            <p class="tx-14 tx-gray-600 mg-b-auto">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Nascetur ridiculus mus. Donec quam felis, ultricies nec...</p>
            <span class="d-block mg-t-20 tx-13">Mar 11, 2017, 11:30am</span>
          </div><!-- col-8 -->
        </div><!-- row -->
      </div><!-- col-lg-6 -->
    </div><!-- row -->

</div><!-- end mainpanel -->

@endsection
