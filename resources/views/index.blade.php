@extends('layouts.main')

@section('styles')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Inicio')

@section('main')
	<div class="portada">
		
		<h1> #ConstruyendoCiudadania </h1>
		<img src="{{ asset('img/wave.svg') }}" alt="Fortalecer">

	</div>

	<section class="section1" id="Nosotros">
		
		<p>EN LA <span>FÁBRICA</span> DISEÑAMOS, DESARROLLAMOS E IMPLEMENTAMOS ESTRATEGIAS DE PARTICIPACIÓN CIUDADANA PARA CONTRIBUIR AL DESARROLLO DE LA SOCIEDAD CIVIL.</p>

	</section>

	<section class="section2" id="ComoTrabajamos">
		
		<p>¿Cómo trabajamos?</p>

		<div class="trabajos">
			
			<div class="fortalecer item">
				
				<img src="{{ asset('img/fortalecer.png') }}" alt="Fortalecer">
				<!-- <h2>Fortalecer</h2> -->
				<p>Desarrollamos conocimientos y herramientas para consolidar el compromiso y mejorar las capacidades de las Organizaciones de la Sociedad Civil</p>

			</div>

			<div class="intervenir item">
				
				<img src="{{ asset('img/intervenir.png') }}" alt="Intervenir">
				<!-- <h2>Intervenir</h2> -->
				<p>Generamos acciones de participación ytrabajo colaborativo con la comunidad.</p>

			</div>

			<div class="compartir item">
				
				<img src="{{ asset('img/compartir.png') }}" alt="Compartir">
				<!-- <h2>Compartir</h2> -->
				<p>Brindamos información sobre derechos ciudadanos.</p>

			</div>

		</div>

	</section>

	<section class="section3" id="QueHacemos">
		
		<p>¿Qué hacemos?</p>

		<div class="cultivar item">
			
			<img class="ocultar" src="{{ asset('img/cultivar.jpg') }}" alt="DefinirAlternativo">

			<div class="texto">
				
				<h2>Cultivar</h2>
				<p>Espacio de formación e investigación en el campo de las organizaciones sociales, la responsabilidad social y la sociedad civil.</p>
				<a href="#">Saber mas</a>

			</div>

		</div>

		<div class="jujuyLab item">
			
			<div class="texto right">
				
				<h2>JujuyLab</h2>
				<p class="right"> Interfaz de participación ciudadana y trabajo colaborativo.</p>
				<a href="#">Saber mas</a>
			
			</div>

			<img class="ocultar" src="{{ asset('img/lab.jpg') }}" alt="DefinirAlternativo">

		</div>

		<div class="normas item">
			
			<img class="ocultar" src="{{ asset('img/normas.jpg') }}" alt="DefinirAlternativo">

			<div class="texto">
				
				<h2>Las Normas que nos Normal</h2>
				<p>Plataforma para difundir y promover los derechos ciudadanos.</p>
				<a href="#">Saber mas</a>

			</div>

		</div>

	</section>

	<section class="section4" id="Contacto">
			
		<div class="contacto">

			<p>Formulario de Contacto</p>

			<div class="formulario">
			
				<input type="text" placeholder="Tu correo">
				<textarea placeholder="Escribe algo positivo..."></textarea>
			
			</div>
		
		</div>

	</section>
@endsection