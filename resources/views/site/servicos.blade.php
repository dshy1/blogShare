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
				<div class="services-page">
					<div class="services-box">

						<div class="services-section">
							<h1>Nossos Serviços</h1>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
						</div>

						<div class="services-section">
							<div class="row">
								<div class="col-md-3">
									<div class="services-post">
										<a href="#"><i class="fa fa-suitcase"></i></a>
										<h2>Web Design</h2>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="services-post">
										<a href="#"><i class="fa fa-cog"></i></a>
										<h2>Facebook e Instagram</h2>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="services-post">
										<a href="#"><i class="fa fa-globe"></i></a>
										<h2>Web Hospedagem</h2>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="services-post">
										<a href="#"><i class="fa fa-html5"></i></a>
										<h2>Desenvolvimento com Html5</h2>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
									</div>
								</div>
							</div>
						</div>

						<div class="services-section">
							<h1>Por que Escolher a Share</h1>

							<ul class="tab-links">
								<li><a class="tab-link1 active" href="#">Suporte Rápido</a></li>
								<li><a class="tab-link2" href="#">Alta Performance</a></li>
								<li><a class="tab-link3" href="#">Garantia de 30 Dias</a></li>
								<li><a class="tab-link4" href="#">Alta Tecnologia</a></li>
							</ul>
							<div class="tab-box">
								<div class="tab-content active">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsu m velit. Nam nec tellus a odio tincidunt auctor a ornare odio.This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsu m velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
									<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
								</div>
								<div class="tab-content">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsu m velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
									<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit.Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit.</p>
								</div>
								<div class="tab-content">
									<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsu m velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
									<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsu m velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
									<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
								</div>
								<div class="tab-content">
									<p>Morbi accumsan ipsu m velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
									<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
									<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
								</div>
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





