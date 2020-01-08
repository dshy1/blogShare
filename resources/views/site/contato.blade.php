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
					<div id="map" class="z-depth-1-half map-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.303674618994!2d-45.93424568541698!3d-22.228554019608303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cbc7b861f4f579%3A0x87bcce24160046c8!2sR.%20Comendador%20Jos%C3%A9%20Garc%C3%ADa%20-%20Centro%2C%20Pouso%20Alegre%20-%20MG%2C%2037550-000!5e0!3m2!1sen!2sbr!4v1578464924131!5m2!1sen!2sbr" width="100%" height="450" frameborder="0" style="border:0;opacity: 0.7;" allowfullscreen=""></iframe>
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







