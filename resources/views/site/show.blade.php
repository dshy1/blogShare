@extends('layouts.main-front')

@section('title', $cliente. ' | ' .$post->titulo)

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

	</style>

	  	<div id="content">
			<div class="inner-content">
				<div class="single-project">
					<div class="single-box">
						<div class="single-box-content">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<img src="{{ asset($path.'storage/images/posts/'.$post->image) }}"  alt="post image" class="post-image" />
									</li>
									<li>
										<img src="{{ asset($path.'template-front/upload/photo1.jpg') }}"  alt="" class="post-image" />
									</li>
									<li>
										<img src="{{ asset($path.'storage/images/posts/'.$post->image) }}"  alt="" class="post-image" />
									</li>
									<li>
										<img src="{{ asset($path.'template-front/upload/photo2.jpg') }}"  alt="" class="post-image" />
									</li>
								</ul>
							</div>
							<div class="project-post-content">
								<div class="project-text">
									<h1>{{ $post->titulo}}</h1>
									<p>{!! $post->texto !!}</p>			
								</div>
								<div class="comment-section">
									<h1>7 Comentários</h1>

									<ul class="comment-tree">
										<li>
											<div class="comment-box">
												<img src="{{ asset($path.'template-front/upload/avatar1.jpg') }}"  alt="avatar" />
												<div class="comment-content">
													<h6>Paulo Ferreira <span>/ 4 minutes ago</span></h6>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</div>
											</div>
											<ul class="depth">
												<li>
													<div class="comment-box">
														<img src="{{ asset($path.'template-front/upload/avatar2.jpg') }}"  alt="avatar" />
														<div class="comment-content">
															<h6>Jonathas Souza <span>/ 12 minutes ago</span></h6>
															<p>Belo trabalho! Sensacional :)</p>
														</div>
													</div>
													<ul class="depth">
														<li>
															<div class="comment-box">
																<img src="{{ asset($path.'template-front/upload/avatar3.jpg') }}"  alt="avatar" />
																<div class="comment-content">
																	<h6>Matheus <span>/ 20 minutes ago</span></h6>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit :)</p>
																</div>
															</div>
															<ul class="depth">
																<li>
																	<div class="comment-box">
																		<img src="{{ asset($path.'template-front/upload/avatar4.jpg') }}"  alt="avatar" />
																		<div class="comment-content">
																			<h6>joshinhobelt <span>/ 36 minutes ago</span></h6>
																			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																		</div>
																	</div>
																</li>
															</ul>
														</li>

														<li>
															<div class="comment-box">
																<img src="{{ asset($path.'template-front/upload/avatar5.jpg') }}"  alt="avatar" />
																<div class="comment-content">
																	<h6>Steven Assis <span>/ 40 minutes ago</span></h6>
																	<p>Belo trabalho!</p>
																</div>
															</div>
														</li>
													</ul>
												</li>

												<li>
													<div class="comment-box">
														<img src="{{ asset($path.'template-front/upload/avatar6.jpg') }}"  alt="avatar" />
														<div class="comment-content">
															<h6>benjamin <span>/ 42 minutes ago</span></h6>
															<p>Não poderia ser melhor :D</p>
														</div>
													</div>
												</li>
											</ul>
										</li>

										<li>
											<div class="comment-box">
												<img src="{{ asset($path.'template-front/upload/avatar7.jpg') }}"  alt="avatar" />
												<div class="comment-content">
													<h6>natancesar<span>/ 48 minutes ago</span></h6>
													<p>Muito promissor e interessante</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<form class="comment-form">
									<h1>Deixe seu comentário</h1>
									<div class="text-fields">
										<div class="float-input">
											<input name="nome" id="name" type="text" placeholder="Nome" />
											<span><i class="fa fa-user"></i></span>
										</div>
										<div class="float-input">
											<input name="email" id="mail" type="text" placeholder="e-mail" />
											<span><i class="fa fa-envelope-o"></i></span>
										</div>
										<div class="float-input">
											<input name="website" id="website" type="text" placeholder="website" />
											<span><i class="fa fa-link"></i></span>
										</div>
									</div>

									<div class="submit-area">
										<textarea name="comment" id="comment" placeholder="Mensagem"></textarea>
										<input type="submit" id="submit_contact" class="main-button" value="Enviar" />
									</div>
								</form>
							</div>
						</div>
						<div class="sidebar">
							<div class="post-info">
								<h1>Post Informações</h1>
								<ul>
									<li>
										<img src="{{ asset($path.'storage/images/users/'.$post->autor->image) }}" alt="autor image" class="autor-image" />
										<a href="#">Por: {{ $post->autor->name }}</a>
									</li>
									<li>
										<span><i class="fa fa-heart"></i></span><a href="#">138 Likes</a>
									</li>
									<li>
										<span><i class="fa fa-calendar"></i></span><a href="#">{{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y')}}</a>
									</li>
									<li>
										<span><i class="fa fa-link"></i></span><a href="#">http:www.themeforest.net</a>
									</li>
								</ul>
							</div>
							<div class="tags-box">
								<h1>Tags</h1>
								<ul>
									<li>
										<a href="{{ route('site.pesquisa.cat', $post->slug) }}">web design</a>
									</li>
									<li>
										<a href="{{ route('site.pesquisa.cat', $post->slug) }}">fotografia</a>
									</li>
									<li>
										<a href="{{ route('site.pesquisa.cat', $post->slug) }}">desenvolvimento</a>
									</li>
									<li>
										<a href="{{ route('site.pesquisa.cat', $post->slug) }}">php</a>
									</li>
									
								</ul>
							</div>
							<div class="archives-sidebar">
								<h1>Arquivos</h1>
								<ul>
									<li><a href="#">Dezembro 2019 <span>(23)</span></a></li>
									<li><a href="#">Novembro 2019 <span>(12)</span></a></li>
									<li><a href="#">Março 2019 <span>(5)</span></a></li>
									<li><a href="#">Setembro 2017 <span>(10)</span></a></li>
									<li><a href="#">Abril 2017 <span>(4)</span></a></li>
									<li><a href="#">Janeiro 2017 <span>(20)</span></a></li>
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







