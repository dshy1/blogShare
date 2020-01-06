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
				<div class="blog-page">
					<div class="blog-box">
						<!-- blog-post -->
						@foreach($posts as $post)
							<div class="blog-post gallery-post">
								<div class="inner-post">
									<div class="flexslider">
										<ul class="slides">
											<li>
												<img alt="" src="{{ asset($caminho.'storage/images/posts/'.$post->image) }}" style="min-height: 200px;max-height: 200px;" />
											</li>
											{{-- <li>
												<img alt="" src="template-front/upload/3.jpg" />
											</li> --}}
										</ul>
									</div>
									<div class="post-content" style="min-height: 275px; max-height: 275px;">
										<h2><a href="single-post.html">{{ $post->titulo}}</a></h2>
										<p>{{substr(strip_tags($post->texto), 0, 150) . '...' ?? 'Não Informado'}}</p>
										<ul class="post-tags">
											<li><a href="#"><i class="fa fa-heart"></i>163 likes</a></li>
											<li><a href="#"><i class="fa fa-comment"></i>3 comments</a></li>
											<li><a href="#"><i class="fa fa-calendar"></i>Dec 19, 2013</a></li>
										</ul>
									</div>							
								</div>
							</div>
						@endforeach
					</div>
					
            		{{ $posts->links() }}

					{{-- <a class="blog-page-link" href="#">Older Posts</a> --}}
				</div>
			</div>
		</div>
		<!-- End content -->
		
	</div><!-- End Container -->
		  
@endsection







