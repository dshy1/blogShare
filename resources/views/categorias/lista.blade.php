@extends('layouts.main02')

@section('title', 'Categorias')

@section('content')

<style type="text/css">
    .com-padding-top {
        padding-top: 100px;
    }
</style>


@if(Session::has('success'))
	<div class="row justify-content-center">
        <div class="col-md-8 alert alert-success alert-dismissible fade show" role="alert" id="close">
            <strong><i class="fas fa-check-circle"></i></strong>{{Session::get('success')}}
            <button type="button" class="close" data-dimiss="alert" aria-label="Close"><span aria-hidden="true" onclick=""><strong>&times;</strong></span></button>
        </div>
    </div>

@endif

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="#">Home</a>
      <span class="breadcrumb-item active">Categorias</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagetitle">
    <i class="icon ion-ios-gear-outline"></i>
    <div>
      <h4>Categorias</h4>
      <p class="mg-b-0">Categorias cadastradas no sistema</p>
    </div>
  </div><!-- d-flex -->

    @if(Session::has('error'))
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
        <div class="bd bd-white-1 rounded table-responsive">
            <table class="table table-striped mg-b-0">
              <thead class="thead-colored thead-info">
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Descrição</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                      <td># {{ $categoria->id }}</td>
                      <td>{{ $categoria->nome }}</td>
                      <td>{{ $categoria->descricao }}</td>
                      <td>Editar | Deletar</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- bd -->
    </div>
  </div>
</div><!--  end mainpanel -->


@endsection
