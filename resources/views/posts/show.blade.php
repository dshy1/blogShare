@extends('layouts.main02')

@section('title', 'Detalhes do Post')

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
    .txt-gray {
      color: #a6aabf;
    }
    .no-padding {
      padding: 0;
    }
    .height-50 {
      max-height: 50%;
    }
    hr {
      background: gray;
    }
    .large {
        font-size: 78px;
        color: #18a4b4;
    }

</style>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="#">Home</a>
      <a class="breadcrumb-item" href="#">Posts</a>
      <span class="breadcrumb-item active">Detalhes do Post</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagetitle">
    <i class="large material-icons">bookmark_border</i>
    <div>
      <h2 class="tx-white">Post {{ $post->id }}</h2>
      <p class="mg-b-0">Veja e atualize seus posts</p>
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

  <div class="br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350">
    <div class="row row-sm mg-t-20">
        <div class="col-lg-8">
          <div class="card card-inverse bd-0 mg-b-20 ht-400 ht-xs-350 ht-lg-100p height-50">
              <img class="wd-100p ht-100p object-fit-cover rounded" src="{{ asset('storage/images/posts/'.$post->image) }}" alt="Image">
              <div class="pos-absolute a-0 pd-b-30 bg-black-1 rounded d-flex align-items-sm-center justify-content-center">
              </div><!-- pos-absolute d-flex -->

              <div class="card bd-gray-400 pd-25 ht-100p ">
                <div class="d-sm-flex justify-content-between align-items-left tx-14 txt-gray" style="flex-direction: column;">
                  <h1>{{ $post->titulo }}</h1>
                  <p>{{ strip_tags($post->texto) }}</p>
                   <h2>Categorias:</h2>
                    <ul>
                      @foreach($post->categorias as $categoria)
                       <li> 
                        {{ $categoria->nome }} 
                      </li>
                      @endforeach
                    </ul>
                </div><!-- d-flex -->
              </div><!-- pos-absolute-bottom -->
          </div><!-- card -->
        </div><!-- col-8 -->
        
        <!-- Informaçoes de data e botoes -->
        <div class="col-lg-4">
          <div class="card bd-gray-400 pd-25">
            <div class="media mg-b-25">
              <img src="../img/img5.jpg" class="d-flex wd-40 rounded-circle mg-r-15" alt="Image">
              <div class="media-body mg-t-2">
                <h6 class="mg-b-5 tx-14"><a href="#" class="tx-white">{{ $post->autor->name }}</a></h6>
              </div><!-- media-body -->
            </div><!-- media -->
            <h5 class="tx-normal tx-roboto mg-b-15 lh-4"><a href="#" class="tx-white hover-info">Data de Criação:</a></h5>
            <p class="tx-14 mg-b-25 txt-gray">{{ date('j M, Y', strtotime($post->created_at)) }}</p>
            <h5 class="tx-normal tx-roboto mg-b-15 lh-4"><a href="#" class="tx-white hover-info">Última Atualização:</a></h5>
            <p class="tx-14 mg-b-25 txt-gray">{{ date('j M, Y', strtotime($post->updated_at)) }}</p>
            <hr>
            
            <!-- Botoes de Açao -->
            <div class="media mg-b-25">
              <div class="col-sm-3 no-padding">
                  <a href="#" class="btn btn-warning bt-editar">Editar</a>
              </div>

              <div class="col-sm-3 no-padding">
                <form action="#" method="POST" id="delete">
                   {{ method_field('POST') }}
                   @csrf
                  <input type="submit" value="Deletar" class="btn btn-danger bt-deletar" onclick="return myFunction();" />
                </form>
              </div>

              <div class="col-sm-3 no-padding">
                  <a href="#" class="btn btn-light bt-voltar">Voltar</a>
              </div>
            </div><!-- media -->

            <p class="mg-t-auto mg-b-0 tx-13">
              <a href="#" class="tx-info">18 Likes</a>
              <a href="#" class="tx-info mg-l-20">1 Comment</a>
            </p>
          </div><!-- card -->
        </div><!-- col-4 -->
    </div><!-- row -->
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




