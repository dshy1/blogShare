@extends('layouts.main-front')

@section('title', $cliente . ' | Pagina Principal')

@section('content')

	<style type="text/css">
		
		.hover-box {
			display: none;
	    	left: 0;
	    	top: 0px;
	    	transition: all 300ms ease 0s;
		}
		.project-title h2 {
			color: #04b4ff;
		}

	</style>

	  	<div id="content">
			<div class="inner-content">
				<div class="portfolio-page">
					<div class="portfolio-box">
						@foreach($portfolios as $port)
							<div class="project-post">
								<img src="{{ asset($caminho.'storage/images/clientes/'.$port->image) }}"  alt="" />
								<div class="hover-box">
									<div class="project-title">
										<h2>{{ $port->titulo }}</h2>
										<span>Ag share comunicação</span>							
									</div>
									<ul class="project-links">
										<li><a href="#"><i class="fa fa-heart"></i></a></li>
										<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
										<li><a href="{{ asset($caminho.'storage/images/clientes/'.$port->image) }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
									</ul>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		
	</div><!-- End Container -->
		  
@endsection


@section('scripts')

  <!-- Script JS -->
  <script type="text/javascript">
  
     // ---  Mostrando a div hover-box-->
    $(".project-post").mouseover(function(){
		 
		$(this).children('.hover-box').css("display", "block");
	});

     // ---  Escondendo a div hover-box-->
	$(".project-post").mouseout(function(){
		 
		$(this).children('.hover-box').css("display", "none");
	});

  </script> 

@stop





