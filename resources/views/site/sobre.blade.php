@extends('layouts.main-front')

@section('title', $cliente . ' | Quem Somos')

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
				<div class="about-page">

					<div class="about-box">
						<div class="about-content">
							<div class="about-section">
								<img src="{{ asset($path.'template-front/upload/about.jpg') }}" alt="" />
								<h1>Quem Somos</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacus sem, accumsan in purus nec, ullamcorper viverra magna. Maecenas justo nisi, iaculis non arcu nec, tincidunt pharetra felis. Suspendisse molestie nulla eros, non dignissim lectus tincidunt quis. Curabitur dignissim lacus vel velit mattis, at pellentesque lorem convallis. Nam pharetra iaculis metus quis feugiat. Sed vitae turpis eget magna aliquet vestibulum sit amet ut lorem. Duis congue pharetra varius. Donec sit amet lectus erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas sollicitudin eu felis id pharetra. Vestibulum quis nibh cursus. </p>
								<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>								
							</div>
							<div class="about-section last-section">
								<h1>Conheça Nossa Equipe</h1>
								<div class="team-members">
									<div class="row">
										<div class="col-md-4">
											<div class="team-post">
												<img src="{{ asset($caminho.'template-front/upload/team1.jpg') }}" alt="" />
												<div class="team-hover">
													<div class="team-data">
														<h3>Glaucus Oliveira</h3>
														<span>CEO & Founder</span>
													</div>
												</div>
											</div>											
										</div>
										<div class="col-md-4">
											<div class="team-post">
												<img src="{{ asset($caminho.'template-front/upload/team2.jpg') }}" alt="" />
												<div class="team-hover">
													<div class="team-data">
														<h3>Janaina Santos</h3>
														<span>Full Stack Developer</span>
													</div>
												</div>
											</div>											
										</div>
										<div class="col-md-4">
											<div class="team-post">
												<img src="{{ asset($caminho.'template-front/upload/team3.jpg') }}" alt="" />
												<div class="team-hover">
													<div class="team-data">
														<h3>Pedro Mira</h3>
														<span>Web Designer</span>
													</div>
												</div>
											</div>											
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="team-post">
												<img src="{{ asset($caminho.'template-front/upload/team4.jpg') }}" alt="" />
												<div class="team-hover">
													<div class="team-data">
														<h3>Jonas Oliveira</h3>
														<span>Técnico em Informática</span>
													</div>
												</div>
											</div>											
										</div>
										<div class="col-md-4">
											<div class="team-post">
												<img src="{{ asset($caminho.'template-front/upload/team5.jpg') }}" alt="" />
												<div class="team-hover">
													<div class="team-data">
														<h3>Leonardo Raul</h3>
														<span>Web Designer</span>
													</div>
												</div>
											</div>											
										</div>
										<div class="col-md-4">
											<div class="team-post">
												<img src="{{ asset($caminho.'template-front/upload/team6.jpg') }}" alt="" />
												<div class="team-hover">
													<div class="team-data" style="padding: 0 5%;">
														<h3 style="margin-top: -30px;">Nosso Cliente Especial</h3>
														<span>Você também faz parte dessa equipe</span>
													</div>
												</div>
											</div>											
										</div>
									</div>
									
								</div>							
							</div>
						</div>
						<div class="sidebar">
							<div class="skills-progress">
								<h1>Nossas Habilidades</h1>
								<p>Desenvolvimento Front End <span>71%</span></p>
								<div class="meter nostrips frontend">
									<span style="width: 71%"></span>
								</div>
								<p>Photoshop <span>85%</span></p>
								<div class="meter nostrips photoshop">
									<span style="width: 85%"></span>
								</div>
								<p>Desenvolvimento Back End <span>76%</span></p>
								<div class="meter nostrips wp">
									<span style="width: 76%"></span>
								</div>
								<p>Plugins <span>53%</span></p>
								<div class="meter nostrips plugins">
									<span style="width: 53%"></span>
								</div>
							</div>

							<div class="testimonial">
								<h1>Clientes Satisfeitos</h1>
								<ul>
									<li>
										<div class="client-test">
											<img src="{{ asset($caminho.'template-front/upload/avatar2.jpg') }}" alt="" />
											<h3>Tadeu Alves - CEO em Unilever</h3>
										</div>
										<p>Sollicitudin lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. . 
										</p>
									</li>
									<li>
										<div class="client-test">
											<img src="{{ asset($caminho.'template-front/upload/avatar1.jpg') }}" alt="" />
											<h3>Marcos Rocha - Corretor de Imóveis</h3>
										</div>
										<p>Sollicitudin lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
										</p>
									</li>
								</ul>
							</div>

							<div class="services">
								<h1>Serviços</h1>
								<ul>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">Fotografia</a></li>
									<li><a href="#">Plugins</a></li>
									<li><a href="#">Front End</a></li>
									<li><a href="#">Back End</a></li>
									<li><a href="#">Web Hospedagem</a></li>
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





