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
				<div class="contact-page">
					<div id="map">
					</div>

					<div class="contact-box">
						<div class="contact-info">
							<h1>Entre em Contato Conosco</h1>
							<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
						</div>
						<form id="contact-form">
							<h1>Envie-nos uma Mensagem</h1>
							<div class="text-fields">
								<div class="float-input">
									<input name="nome" id="name" type="text" placeholder="Nome">
									<span><i class="fa fa-user"></i></span>
								</div>
								<div class="float-input">
									<input name="email" id="mail" type="text" placeholder="E-mail">
									<span><i class="fa fa-envelope-o"></i></span>
								</div>
								<div class="float-input">
									<input name="assunto" id="website" type="text" placeholder="Assunto">
									<span><i class="fa fa-link"></i></span>
								</div>
							</div>

							<div class="submit-area">
								<textarea name="mensagem" id="comment" placeholder="Mensagem"></textarea>
								<input type="submit" id="submit_contact" class="main-button" value="Enviar Mensagem">
								<div id="msg" class="message"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End content -->
		
	</div><!-- End Container -->
		  
@endsection







