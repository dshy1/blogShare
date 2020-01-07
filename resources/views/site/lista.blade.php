@extends('layouts.main-front')

@section('title', $cliente . ' | Blog')

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
		img.post-image {
			min-height: 200px;
			max-height: 200px;
			object-fit:cover
		}
		.post-tags {
			position: absolute;
			bottom: 18px;
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
												<a href="{{ route('site.show', $post->slug) }}">
													<img src="{{ asset($caminho.'storage/images/posts/'.$post->image) }}" alt="post image" class="post-image">
												</a>
											</li>
										</ul>
									</div>
									<div class="post-content" style="min-height: 275px; max-height: 275px;">
										<h2><a href="{{ route('site.show', $post->slug) }}">{{ $post->titulo}}</a></h2>
										<p>{{substr(strip_tags($post->texto), 0, 150) . '...' ?? 'Não Informado'}}</p>
										<ul class="post-tags">
											<li><a href="#"><i class="fa fa-heart"></i>163 likes</a></li>
											<li><a href="#"><i class="fa fa-comment"></i>3 comments</a></li>
											<li><a href="#"><i class="fa fa-calendar"></i>19 Dezembro, 2019</a></li>
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







