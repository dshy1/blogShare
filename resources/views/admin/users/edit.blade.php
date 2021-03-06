@extends('layouts.main-back')

@section('title', $plataforma. ' | Editar Usuário')

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
      .profile-image {
        max-height: 112px;
        object-fit:cover;
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
      </div><!-- card-header -->
     
      <div class="card-body">
        <div class="card-profile-img">
          <img src="{{ $user->image !== null ? asset($path.'storage/images/users/'.$user->image) : asset($path.'storage/images/users/avatar01.jpg') }}" alt="profile image" class="profile-image">
        </div><!-- card-profile-img -->
        <h4 class="tx-normal tx-roboto tx-white">{{ $user->name }}</h4>
        <p class="mg-b-25 cinza-claro">{{ $user->email }}</p>
      </div><!-- card-body -->
    </div><!-- card -->

    <div class="ht-70 bg-black-1 pd-x-20 d-flex align-items-center justify-content-center bd-b bd-white-1">
      <ul class="nav nav-outline active-primary align-items-center flex-row" role="tablist">
        <li class="nav-item">
          <a href="#div-form-edit-user" class="nav-link active">Editar Perfil</a>
        </li>
      </ul>
    </div>

     @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
             @endforeach
          </ul>
        </div>
     @endif

    <div class="tab-content br-profile-body">
      <div class="tab-pane fade active show" id="posts">
        <div class="row">
          <div class="col-lg-12">
            <div class="media-list bg-br-primary rounded bd bd-white-1">
              <div class="media pd-20 pd-xs-30">
                <div class="media-body mg-l-20" id="div-form-edit-user">
                  <div class="form-layout form-layout-1">
                      <form id="form-edit-user" name="form-users" action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PATCH')}}

                            @include('users.inputs', ['user' => $user, 'detalhe' => null])

                            <div class="form-layout-footer marginT70">
                              @if(Auth::user()->email === 'teste@gmail.com')
                                <input type="submit" class="btn btn-primary disabled" value="Salvar alterações" onclick="return false;" />
                              @else
                                <input type="submit" class="btn btn-primary" value="Salvar alterações" onclick="return true;" />
                              @endif
                              <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                       </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- br-mainpanel -->

@endsection


