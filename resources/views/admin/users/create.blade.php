@extends('layouts.main-back')

@section('title', $plataforma. ' | Criar Novo Usuário')

@section('content')

  <style type="text/css">

      .com-padding-top {
        padding-top: 100px;
      }
      .x-large {
        font-size: 92px;
      }

  </style>


  <!-- ########## START: MAIN PANEL ########## -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="br-mainpanel">
                    <div class="br-pageheader">
                    <nav class="breadcrumb pd-0 mg-0 tx-12">
                        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                        <a class="breadcrumb-item" href="{{ route('users.index') }}">Usuários</a>
                        <span class="breadcrumb-item active">Novo Usuário</span>
                    </nav>
                    </div><!-- br-pageheader -->

                    <div class="br-pagetitle">
                        <i class="x-large material-icons cor-icones">add_photo_alternate</i>
                    <div>
                        <h2 class="tx-white">Novo Usuário</h2>
                        <p class="mg-b-0 cinza-claro">Crie um novo colaborador para seu blog</p>
                    </div>
                    </div><!-- d-flex -->

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="br-pagebody">
                    <div class="br-section-wrapper">
                        <div class="form-layout form-layout-1">
                                <form id="form-users" name="form-users" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                @include('admin.users.inputs', ['user' => null, 'detalhe' => null])

                                <div class="form-layout-footer marginT70">
                                    @if(Auth::user()->email === 'teste@gmail.com')
                                    <input type="submit" class="btn btn-primary disabled" value="Adicionar Usuário" onclick="return false;" />
                                    @else
                                    <input type="submit" class="btn btn-primary" value="Adicionar Usuário" onclick="return true;" />
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

  <!--  end mainpanel -->

@endsection


