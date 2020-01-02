@extends('layouts.main02')

@section('title', $cliente . ' | Novo Usuário')

@section('content')

<style type="text/css">

    .com-padding-top {
      padding-top: 100px;
    }
    .large {
      font-size: 78px;
      color: #6f42c1;
    }

</style>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
      <a class="breadcrumb-item" href="{{ route('users.index') }}">Usuários</a>
      <span class="breadcrumb-item active">Novo Usuário</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagetitle">
      <i class="large material-icons">add_photo_alternate</i>
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

                @include('users.inputs', ['user' => null, 'detalhe' => null])

      	        <div class="form-layout-footer marginT70">
      	          <button class="btn btn-primary">Adicionar Usuário</button>
      	          <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
      	        </div><!-- form-layout-footer -->
      		 </form>

      </div><!-- form-layout -->
    </div>
  </div>
</div><!--  end mainpanel -->

@endsection


