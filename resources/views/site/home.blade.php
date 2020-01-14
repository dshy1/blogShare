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

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/ana_maria.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Ana Maria</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/ana_maria.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/lab_vida.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Lab Vida</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/lab_vida.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/dentista.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Centro de Odontologia</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/dentista.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/padua.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Pádua</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/padua.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/pro_vets.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Pro Vets</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/pro_vets.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/sfarma.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>SFarma</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/sfarma.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/fisiocorpo.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>FisioCorpo</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/fisiocorpo.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/trouver.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Trouver</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/trouver.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/ortoclin.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Ortoclin</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/ortoclin.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/antonio.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Dr. Antônio Evanir Jr</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/antonio.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/ipo.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>IPO Prótese</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/ipo.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/respect.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/respect.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/podologia.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Centro de Podologia</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/podologia.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/polosul.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Polosul</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/polosul.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/dentista.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Centro de Odontologia</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/dentista.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'storage/images/clientes/personal.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Personal Trainner</h2>
									<span>Ag share comunicação</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'storage/images/clientes/personal.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>
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





