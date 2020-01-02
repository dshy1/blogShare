@extends('layouts.main02')

@section('title', $cliente . ' | Editar Usuário')

@section('content')

<style type="text/css">

    .com-padding-top {
      padding-top: 100px;
    }
    .large {
      font-size: 78px;
      color: #18a4b4;
    }
    .breadcrumb {
      background: transparent;
    }

</style>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel br-profile-page">
  <div class="card widget-4 bd-0 rounded-0">
    <div class="card-header ht-75">
      <div class="hidden-xs-down">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
          <a class="breadcrumb-item" href="{{ route('users.index') }}">Usuários</a>
          <span class="breadcrumb-item active">Editar Usuário</span>
        </nav>
      </div>
      <div class="tx-24 hidden-xs-down">
        <a href="#" class="mg-r-10"><i class="icon ion-ios-email-outline"></i></a>
        <a href="#"><i class="icon ion-more"></i></a>
      </div>
    </div><!-- card-header -->
    <div class="card-body">
      <div class="card-profile-img">
        <img src="{{ $user->image !== null ? '$user->image' : asset('storage/images/user/avatar01.jpg') }}" alt="profile image" class="profile-image">
      </div><!-- card-profile-img -->
      <h4 class="tx-normal tx-roboto tx-white">{{ $user->name }}</h4>
      <p class="mg-b-25">{{ $user->email }}</p>

      <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25">Singer, Lawyer, Achiever, Wearer of unrelated hats, Data Visualizer, Mayonaise Tester. I don't know what alt-tab does. Storyteller.</p>

      <p class="mg-b-0 tx-24">
        <a href="#" class="tx-white-8 mg-r-5"><i class="fab fa-facebook-official"></i></a>
        <a href="#" class="tx-white-8 mg-r-5"><i class="fab fa-twitter"></i></a>
        <a href="#" class="tx-white-8 mg-r-5"><i class="fab fa-pinterest"></i></a>
        <a href="#" class="tx-white-8"><i class="fab fa-instagram"></i></a>
      </p>
    </div><!-- card-body -->
  </div><!-- card -->

  <div class="ht-70 bg-black-1 pd-x-20 d-flex align-items-center justify-content-center bd-b bd-white-1">
    <ul class="nav nav-outline active-primary align-items-center flex-row" role="tablist">
      <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Posts</a></li>
      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#photos" role="tab">Photos</a></li>
      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Favorites</a></li>
      <li class="nav-item hidden-xs-down"><a class="nav-link" data-toggle="tab" href="#" role="tab">Settings</a></li>
    </ul>
  </div>

  <div class="tab-content br-profile-body">
    <div class="tab-pane fade active show" id="posts">
      <div class="row">
        <div class="col-lg-12">
          <div class="media-list bg-br-primary rounded bd bd-white-1">
            <div class="media pd-20 pd-xs-30">
              <img src="{{ $user->image !== null ? '$user->image' : 'storage/images/user/avatar01.jpg' }}" alt="profile image" class="wd-40 rounded-circle">
              <div class="media-body mg-l-20">
                <div class="d-flex justify-content-between mg-b-10">
                  <div>
                    <h6 class="mg-b-2 tx-white tx-14">Louise Kate</h6>
                    <span class="tx-12 tx-gray-500">@louisekate</span>
                  </div>
                  <span class="tx-12">2 minutes ago</span>
                </div><!-- d-flex -->
                <p class="mg-b-20">The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.</p>
                <div class="media-footer">
                  <div>
                    <a href="#"><i class="fa fa-heart"></i></a>
                    <a href="#" class="mg-l-10"><i class="fa fa-comment"></i></a>
                    <a href="#" class="mg-l-10"><i class="fa fa-retweet"></i></a>
                    <a href="#" class="mg-l-10"><i class="fa fa-ellipsis-h"></i></a>
                  </div>
                </div><!-- d-flex -->
              </div><!-- media-body -->
            </div><!-- media -->
          </div><!-- card -->

          <div class="bg-black-1 pd-y-12 tx-center mg-t-15 mg-xs-t-30 bd bd-white-1 rounded">
            <a href="#" class="tx-gray-600 hover-info">Load more</a>
          </div>
        </div><!-- col-lg-8 -->
      </div><!-- row -->
    </div><!-- tab-pane -->
  </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@endsection


