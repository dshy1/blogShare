@extends('layouts.main-front')

@section('title', $cliente. ' | ' .$port->titulo)

@section('content')

	<style type="text/css">
		
		img.post-image {
			min-height: 400px;
			max-height: 400px;
			object-fit:cover
		}
		.autor-image {
			width: 52px;
			height: 52px;
			border-radius: 100%;
			margin: 0 4% 0 -3%;
			object-fit: cover;
		}
		img.client-image {
			min-height: 430px;
			max-height: 430px;
			object-fit: cover;
		}
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
				<div class="single-project">
					<div class="single-box">
						<div class="single-box-content">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<img src="{{ asset($path.'storage/images/clientes/'.$port->image) }}" alt="client image" class="client-image" />
									</li>
								</ul>
							</div>
							<div class="project-post-content">
								<div class="project-text">
									<h1>{{ $port->titulo }}</h1>
									<p>{!! $port->texto !!}</p>			
								</div>

								<div class="similar-projects">
									<h1>Clientes Recentes</h1>
									<div class="portfolio-box">
										
										@foreach($portfolios as $pt)
											<div class="project-post">
												<img src="{{ asset($path.'storage/images/clientes/'.$pt->image) }}"  alt="client image" />
												<div class="hover-box">
													<div class="project-title">
														<h2>{{ $pt->titulo }}</h2>
														<span>Ag share comunicação</span>							
													</div>
													<ul class="project-links">
														<li><a href="#"><i class="fa fa-heart"></i></a></li>
														<li><a href="{{ route('portfolio.show', $pt->slug) }}"><i class="fa fa-arrow-right"></i></a></li>
														<li><a href="{{ asset($path.'storage/images/clientes/'.$pt->image) }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
													</ul>
												</div>
											</div>
										@endforeach

									</div>
								</div>
							</div>						
						</div>
						<div class="sidebar">
							<div class="post-info">
								<h1>Informações</h1>
								<ul>
									<li>
										<span><i class="fa fa-calendar"></i></span><a href="#">{{ \Carbon\Carbon::parse($port->created_at)->format('d M, Y')}}</a>
									</li>
									<li>
										<span><i class="fa fa-facebook"></i></span><a href="{{'facebook.com/'.$port->url }}">{{ $port->url ?? 'sharecomunicacao'}}</a>
									</li>
								</ul>
							</div>
							<div class="project-gallery">
								<h1>Clientes AgShare</h1>
								<ul>
									@foreach($galeria as $gl)
										<li>
											<a href="{{ route('portfolio.show', $gl->slug) }}">
												<img src="{{ asset($path.'storage/images/clientes/'.$gl->image) }}"  alt="client image" />
											</a>
										</li>
									@endforeach
									
								</ul>
							</div>
							<div class="project-feature">
								<h1>O que oferecemos</h1>
								<ul>
									<li>
										Atendimento Personalizado
									</li>
									<li>
										Time de Criativos
									</li>
									<li>
										Ética e Compromisso
									</li>
									<li>
										Cumprimento das Normas Éticas
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End content -->
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






