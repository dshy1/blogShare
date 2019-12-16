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

  @if(Session::has('success'))
    <div class="row justify-content-center">
      <div class="col-md-8 alert alert-success alert-dismissible fade show" role="alert" id="close">
          <strong><i class="fas fa-check-circle"></i></strong>{{ Session::get('success') }}
          <button type="button" class="close" data-dimiss="alert" aria-label="Close"><span aria-hidden="true" onclick="fecharAlert();"><strong>&times;</strong></span></button>
      </div>
    </div>
  @endif

  <div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="bd bd-white-1 rounded table-responsive">
            <div class="form-layout form-layout-1">

              <h1>OK!</h1>

            </div><!-- form-layout -->
        </div><!-- bd -->
    </div>
  </div>

</div><!--  end mainpanel -->

@endsection


@section('scripts')

  <!-- Script JS -->
  <script type="text/javascript">
    
     function fecharAlert() {
      
      document.getElementById("close").style.display = "none";
   }

  </script>

@endsection




