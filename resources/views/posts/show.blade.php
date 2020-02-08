@extends('layouts.main-back')

@section('title', $plataforma. ' | ' .$post->titulo)

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
          font-size: 80px;
      }
      .margin-right-neg {
        margin-right: -15px;
      }
      .margin-left-neg {
        margin-left: -8px;
      }
      .ht-100p {
        height: auto;
      }

  </style>


  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('posts.index') }}">Posts</a>
        <span class="breadcrumb-item active">Detalhes do Post</span>
      </nav>
    </div>

    <div class="br-pagetitle">
      <i class="large material-icons cor-icones">local_library</i>
      <div>
          <h2 class="tx-white">{{ $post->titulo }}</h2>
          <p class="mg-b-0 cinza-claro">Aqui você pode ver todos os detalhes do seu post</p>
      </div>
    </div>

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
                <img class="wd-100p ht-100p object-fit-cover rounded" src="{{ asset($caminho.'storage/images/posts/'.$post->image) }}" alt="Image">
                <div class="pos-absolute a-0 pd-b-30 bg-black-1 rounded d-flex align-items-sm-center justify-content-center">
                </div>

                <div class="card bd-gray-400 pd-25 ht-100p ">
                  <div class="d-sm-flex justify-content-between align-items-left tx-14 txt-gray" style="flex-direction: column;">
                    <h4 class="branco">{{ $post->titulo }}</h4>
                    <p>{!! $post->texto !!}</p>
                     <h4 class="branco">Categorias:</h4>
                      <ul>
                        @foreach($post->categorias as $categoria)
                         <li> 
                          {{ $categoria->nome }} 
                        </li>
                        @endforeach
                      </ul>
                  </div>
                </div>
            </div>
          </div>
          
          <!-- Informações de data e botões de ação -->
          <div class="col-lg-4">
            <div class="card bd-gray-400 pd-25">
              <div class="media mg-b-25">
                <img src="{{ $post->autor->image !== null ? asset($caminho.'storage/images/users/'.$post->autor->image) : asset($caminho.'storage/images/users/avatar01.jpg') }}" class="d-flex wd-40 rounded-circle mg-r-15" alt="user image" />
                <div class="media-body mg-t-2">
                  <h6 class="mg-b-5 tx-14"><a href="#" class="tx-white hover-info">{{ $post->autor->name }}</a></h6>
                </div>
              </div>
              <h6 class="tx-normal tx-roboto mg-b-15 lh-4 cinza-claro">Data de Criação:</h6>
              <p class="tx-14 mg-b-25 txt-gray cinza-rodape">{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y')}}</p>
              <h6 class="tx-normal tx-roboto mg-b-15 lh-4 cinza-claro">Última Atualização:</h6>
              <p class="tx-14 mg-b-25 txt-gray cinza-rodape">{{ \Carbon\Carbon::parse($post->updated_at)->format('d M, Y')}}</p>
              <hr>
              
              <!-- Botões de ação -->
              <div class="media mg-b-25">
                <div class="col-sm-3 no-padding margin-right-neg">
                  @if(Auth::user()->email === 'teste@gmail.com')
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-success btn-sm com-margin disabled">Editar</a>
                  @else
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-success btn-sm com-margin">Editar</a>
                  @endif
                </div>

                <div class="col-sm-3 no-padding">
                  <form action="{{route('posts.destroy', ['id' => $post->id])}}" method="POST" id="form-delete-posts02">
                      @csrf
                      @method('DELETE') 

                      @if(Auth::user()->email === 'teste@gmail.com')
                        <input type="submit" value="Deletar" class="btn btn-outline-danger btn-sm  disabled" onclick=" return false;" />
                      @else
                        <input type="submit" value="Deletar" class="btn btn-outline-danger btn-sm com-margin-top" onclick=" return true;" />
                      @endif
                      
                  </form>
                </div>

                <div class="col-sm-3 no-padding margin-left-neg">
                   <a href="{{ route('posts.index') }}" class="btn btn-light btn-sm bt-voltar">Posts</a>
                </div>
              </div>

              <p class="mg-t-auto mg-b-0 tx-13">
                <a href="#" class="tx-info">18 Likes</a>
                <a href="#" class="tx-info mg-l-20">1 Comment</a>
              </p>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!--  end mainpanel -->

@endsection


@section('scripts')

    <!-- Script JS -->
    <script type="text/javascript">

        // Função para confirmar deletar 
        function confirmDelete() {
            if (confirm("Deseja realmente deletar esse post?")) {
                return true;
            }else {
                return false;
            }
        }

    </script>

@stop



