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
							<img src="{{ asset($caminho.'template-front/upload/image1.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image1.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image2.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 02</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image2.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image3.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image3.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image4.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image4.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image5.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image5.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image6.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image6.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image7.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image7.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image8.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image8.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image9.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image9.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image10.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image10.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image11.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image11.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image12.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image12.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image13.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image13.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image14.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image14.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image15.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image15.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image16.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image16.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image12.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image12.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image1.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image1.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image3.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image3.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="project-post">
							<img src="{{ asset($caminho.'template-front/upload/image8.jpg') }}"  alt="" />
							<div class="hover-box">
								<div class="project-title">
									<h2>Creative Wallpaper 03</h2>
									<span>illustration, nature</span>							
								</div>
								<ul class="project-links">
									<li><a href="#"><i class="fa fa-heart"></i></a></li>
									<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									<li><a href="{{ asset($caminho.'template-front/upload/image8.jpg') }}" class="zoom-image"><i class="fa fa-search"></i></a></li>
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





