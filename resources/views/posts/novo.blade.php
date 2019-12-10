@extends('layouts.main02')

@section('title', 'Novo Post')

@section('content')

<style type="text/css">

    .com-padding-top {
        padding-top: 100px;
    }

    .alert-success {
        width: 420px;
        position: absolute;
        top: 80px;
    }
    .sem-padding {
        padding: 0 4px;
    }

    .d-flex {
        display: flex;
    }
    .form-categorias {
      width: 50%;
    }

    .custom-file-label {
      margin-top: 25px;
    }

</style>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="#">Home</a>
      <a class="breadcrumb-item" href="#">Posts</a>
      <span class="breadcrumb-item active">Novo Post</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagetitle">

    <!-- <i class="icon ion-ios-gear-outline"></i> -->
    <div>
      <h4>Posts</h4>
      <p class="mg-b-0">Vamos criar um novo post</p>
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
            <div class="form-layout form-layout-1">
              <form id="form-categorias" name="form-posts" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">

                  @csrf

                  @include('posts.inputs', ['post' => null, 'detalhe' => null])

                <div class="form-layout-footer">
                  <button class="btn btn-primary">Salvar Post</button>
                  <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
                </div><!-- form-layout-footer -->
              </form>
            </div><!-- form-layout -->
        </div><!-- bd -->
    </div>
  </div>

</div><!--  end mainpanel -->

@endsection


@section('scripts')
  <!-- Script JS -->
  <script type="text/javascript">

    var quill = new Quill('#editor', {
        theme: 'snow'
      });

    $(".select2").select2();

  </script> 
@endsection
