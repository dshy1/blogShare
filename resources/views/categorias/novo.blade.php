@extends('layouts.main02')

@section('title', 'Criar Categoria')

@section('content')

<style type="text/css">
    .com-padding-top {
        padding-top: 100px;
    }
</style>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="#">Home</a>
      <a class="breadcrumb-item" href="#">Categorias</a>
      <span class="breadcrumb-item active">Nova Categoria</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagetitle">
    <i class="icon ion-ios-gear-outline"></i>
    <div>
      <h4>Nova Categoria</h4>
      <p class="mg-b-0">Crie uma nova categoria para seus posts</p>
    </div>
  </div><!-- d-flex -->

  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="form-layout form-layout-1">
		
		<form id="form-categorias" name="form-categorias" action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">

			@csrf

            @include('categorias.inputs', ['categoria' => null, 'detalhe' => null])

	        <div class="form-layout-footer">
	          <button class="btn btn-primary">Adicionar Nova Categoria</button>
	          <button class="btn btn-secondary">Cancelar</button>
	        </div><!-- form-layout-footer -->
		 </form>

      </div><!-- form-layout -->
    </div>
  </div>
</div><!--  end mainpanel -->

@endsection


