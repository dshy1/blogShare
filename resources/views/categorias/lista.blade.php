@extends('layouts.main02')

@section('title', 'Categorias')

@section('content')

<style type="text/css">
    .com-padding-top {
        padding-top: 100px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 com-padding-top">
            <h1>Todas as Categorias</h1>
        </div>
    </div>

    @if(Session::has('success'))
		<div class="row justify-content-center">
	        <div class="col-md-8 alert alert-success alert-dismissible fade show" role="alert" id="close">
	            <strong><i class="fas fa-check-circle"></i></strong>{{Session::get('success')}}
	            <button type="button" class="close" data-dimiss="alert" aria-label="Close"><span aria-hidden="true" onclick=""><strong>&times;</strong></span></button>
	        </div>
	    </div>

    @endif
</div>

@endsection
