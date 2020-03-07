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
		span.float-right a {
			width: 25px;
			height: 25px;
			float: right;
			font-size: 17px;
			font-weight: bold;
			margin: -6px 10px 0 0;
			background: transparent;
    		border-radius: 100%;
    		text-align: center;
    		line-height: 25px;

		}
		span.float-right a:hover, span.float-right a:focus {
			text-decoration: none;
			background: #d4d4d4;		
		}

		@media (min-width: 1000px) {
			.gallery-post {
				width: 50%;
			}
			.post-content h2 {
				font-size: 23px;
				margin: 12px 0 15px;
			}
			.post-tags {
				bottom: 37px;
			}
		}

	</style>

	  	<div id="content">
			<div class="inner-content">
				<div class="blog-page">
					@isset($count)
    					@if($count == 0)
							<h5 class="alert alert-success">Sua pesquisa não encontrou nenhum resultado<span class="float-right"><a href="#">X</a></span></h5>
						@else
							<h5 class="alert alert-success">Foram encontrados <strong>{{ $count }}</strong> resultados <span class="float-right"><a href="#">X</a></span></h5>
						@endif
					@endif
					<div class="blog-box">
						<!-- blog-post -->
						@foreach($posts as $post)
							<div class="blog-post gallery-post">
								<div class="inner-post">
									<div class="flexslider">
										<ul class="slides">
											<li>
												<a href="{{ route('site.show', $post->slug) }}">
													<img src="{{ asset($path.'storage/images/posts/'.$post->image) }}" alt="post image" class="post-image" />
												</a>
											</li>
										</ul>
									</div>
									<div class="post-content" style="min-height: 275px; max-height: 275px;">
										@if(strlen($post->titulo) > 80)
											<h2>
												<a href="{{ route('site.show', $post->slug) }}">{{substr(strip_tags($post->titulo), 0, 60) . '...' ?? 'Não Informado'}}</a>
											</h2>
										@else
											<h2>
												<a href="{{ route('site.show', $post->slug) }}">{{ $post->titulo}}</a>
											</h2>
										@endif
										<p>{{substr(strip_tags($post->texto), 0, 240) . '...' ?? 'Não Informado'}}</p>
										<ul class="post-tags">
											<li><a href="#"><i class="fa fa-heart"></i>163 likes</a></li>
											<li><a href="#"><i class="fa fa-comment"></i>3 comments</a></li>
											<li><a href="#"><i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y')}}</a></li>
										</ul>
									</div>							
								</div>
							</div>
						@endforeach
					</div>
					
                 	{{ $posts->links() }}
            		
				</div>
			</div>
		</div>
		<!-- End content -->
		
	</div><!-- End Container -->
		  
@endsection







