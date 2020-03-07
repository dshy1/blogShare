@extends('layouts.main-back')

@section('title', $plataforma. ' | Painel de Controle')

@section('content')

  <style type="text/css">

      .large {
          font-size: 78px;
          color: #809db1;  
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
      	bottom: -10px;
      }
      .profile-image {
        max-height: 112px;
        object-fit:cover;
      }
      .card-title {
        font-size: 20px;
      }
      .media-cards {
        position: absolute;
        top: 242px;
        right: 0;
      }
      .media-cards img {
        width: 40px;
        height: 40px;
        border-radius: 100%;
        object-fit:cover;
        margin-right: 25px;
      }
      .card-post-destaque {
        max-height: 375px;
      }
      .table-responsive {
        overflow: hidden;
      }

  </style>

  {{-- Essa é a home do painel de controle--}}
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <h4 class="mb-0 font-size-18">Dashboard</h4>
                          <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                  <li class="breadcrumb-item">
                                      <a href="javascript: void(0);" class="breadcrumb-item active">Home</a>
                                  </li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div> 

              <div class="row">
                  <div class="col-sm-6 col-xl-3">
                      <div class="card">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-body">
                                      <h5 class="font-size-14">Posts Publicados</h5>
                                  </div>
                                  <div class="avatar-xs">
                                      <span class="avatar-title rounded-circle bg-primary">
                                          <i class="dripicons-box"></i>
                                      </span>
                                  </div>
                              </div>
                              {{-- traz o total de posts publicados --}}
                              <h4 class="m-0 align-self-center">{{ count($listaPosts) }}</h4>
                              {{-- Mostra a data de criacao do ultimo post --}}
                              <p class="mb-0 mt-3 text-muted">{{ \Carbon\Carbon::parse($lastPost->created_at)->diffForHumans() }}</p>                              
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-xl-3">
                      <div class="card">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-body">
                                      <h5 class="font-size-14">Usuarios</h5>
                                  </div>
                                  <div class="avatar-xs">
                                      <span class="avatar-title rounded-circle bg-primary">
                                          <i class="dripicons-briefcase"></i>
                                      </span>
                                  </div>
                              </div>
                              <h4 class="m-0 align-self-center">$45,253</h4>
                              <p class="mb-0 mt-3 text-muted"><span class="text-success">2.73 % <i class="mdi mdi-trending-up mr-1"></i></span>{{ \Carbon\Carbon::now()->format('d M, Y') }}</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-xl-3">
                      <div class="card">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-body">
                                      <h5 class="font-size-14">Categorias</h5>
                                  </div>
                                  <div class="avatar-xs">
                                      <span class="avatar-title rounded-circle bg-primary">
                                          <i class="dripicons-tags"></i>
                                      </span>
                                  </div>
                              </div>
                              <h4 class="m-0 align-self-center">$12.74</h4>
                              <p class="mb-0 mt-3 text-muted"><span class="text-danger">4.35 % <i class="mdi mdi-trending-down mr-1"></i></span> From previous period</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-xl-3">
                      <div class="card">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-body">
                                      <h5 class="font-size-14">Tags</h5>
                                  </div>
                                  <div class="avatar-xs">
                                      <span class="avatar-title rounded-circle bg-primary">
                                          <i class="dripicons-cart"></i>
                                      </span>
                                  </div>
                              </div>
                              <h4 class="m-0 align-self-center">20,781</h4>
                              <p class="mb-0 mt-3 text-muted"><span class="text-success">7.21 % <i class="mdi mdi-trending-up mr-1"></i></span> From previous period</p>
                          </div>
                      </div>
                  </div>
              </div>
                
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="header-title mb-4">Posts Recentes</h4>
                              <div class="table-responsive">
                                 @isset($posts)
                                    <div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">
                                       <div class="card-deck card-deck-sm mg-x-0">
                                          @foreach($posts as $post)
                                            <div class="card bd-0 mg-0">
                                              <a href="{{ route('post.show', $post->id) }}">
                                                <figure class="{{ Auth::user()->roles->first()->name == 'Admin' ? 'card-item-img bg-mantle rounded-top' : 'card-item-img bg-mantle rounded-top' }}">
                                                   <img class="img-fluid rounded-top" src="{{ asset($path.'storage/images/posts/'.$post->image) }}" alt="post image" />
                                                </figure>
                                              </a>
                                              
                                              {{-- Essa div com a imagem do autor do post só vai aparecer para o admin --}}
                                              @if(Auth::user()->roles()->first()->name =='admin')
                                                <div class="media mg-b-25 media-cards">
                                                    <img src="{{ $post->autor->image !== null ? asset($path.'storage/images/users/'.$post->autor->image) : asset($path.'storage/images/users/avatar01.jpg') }}" class="d-flex wd-40 rounded-circle mg-r-15" alt="user image" />
                                                </div><!-- media -->
                                              @endif

                                              <div class="card-body pd-25 bd bd-t-0 bd-white-1 rounded-bottom">
                                                <p class="tx-11 tx-uppercase tx-mont tx-semibold tx-info">{{ $post->categorias[0]->nome }}</p>
                                                <h4 class="tx-normal tx-roboto lh-3 mg-b-15 card-title">
                                                  <a href="{{ route('post.show', $post->id) }}" class="tx-white hover-info">{{ $post->titulo }}
                                                  </a>
                                                </h4>
                                                <p class="tx-14 mg-b-25 cinza-claro">{{substr(strip_tags($post->texto), 0, 157) . '...' ?? 'Não Informado'}}</p>
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
                              </div>
                          </div>
                      </div>
                  </div>                       
              </div>
            </div>
            {{-- container --}}
        </div>
        {{-- page-content --}}
    </div>
  	
@endsection
