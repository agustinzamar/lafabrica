@extends('layouts.main')

@section('styles')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Inicio')

@section('main')
	<div class="portada">

		<h1> #ConstruyendoCiudadania </h1>
		<img src="{{ asset('img/wave.svg') }}" class="wave" alt="wave">

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
				<p>Generamos acciones de participación y trabajo colaborativo con la comunidad.</p>

			</div>

			<div class="compartir item">

				<img src="{{ asset('img/compartir-1.png') }}" alt="Compartir">
				<!-- <h2>Compartir</h2> -->
				<p>Brindamos información sobre derechos ciudadanos para fortalecer el ejercicio de la Democracia.</p>

			</div>


		</div>

		<img src="{{ asset('img/wave6.svg') }}" class="wave" alt="wave">

	</section>

	<section class="section3" id="QueHacemos">

		<p>¿Qué hacemos?</p>

		<div class="cultivar item">

			<img class="ocultar" src="{{ asset('img/cultivar.png') }}" alt="DefinirAlternativo">

			<div class="texto">

				<h2>Cultivar</h2>
				<p>Espacio de formación e investigación en el campo de las organizaciones sociales, la responsabilidad social y la sociedad civil.</p>
				<a class="saberMas1" href="{{ route('projects') }}#Cultivar">Saber mas</a>

			</div>

		</div>

		<div class="jujuyLab item">

			<div class="texto right">

				<h2>LabJujuy</h2>
				<p class="right"> Interfaz de participación ciudadana y trabajo colaborativo.</p>
				<a class="saberMas2" href="{{ route('projects') }}#LabJujuy">Saber mas</a>

			</div>

			<img class="ocultar" src="{{ asset('img/lab.png') }}" alt="DefinirAlternativo">

		</div>

		<div class="normas item">

			<img class="ocultar" src="{{ asset('img/normas.png') }}" alt="DefinirAlternativo">

			<div class="texto">

				<h2>Las Normas que nos Norman</h2>
				<p>Plataforma para difundir y promover los derechos ciudadanos.</p>
				<a class="saberMas3" href="{{ route('projects') }}#Normas">Saber mas</a>

			</div>

		</div>

	</section>

	<section class="section5" id="Novedades">
		
		<div class="card">
			
			<a href="#" class="novedad">
			
				<img class="imagenNovedad" src="https://mail-attachment.googleusercontent.com/attachment/u/0/?ui=2&ik=36b2a2fa48&attid=0.3&permmsgid=msg-f:1659728385805497086&th=17088a2c5b91b2fe&view=att&disp=inline&realattid=f_k75a8x0u2&saddbat=ANGjdJ_652i0EE0c5pjgEkVMM5KbXPULagk6H_4dR9NI6WPOfSS7E7_Szy8Bue0XFtXnDfDXWSf981ssCsZ_9KppKuS6nvGC4dATHgHYlBYO3azrd3PmZ5u1u1ICMqAMx6TVZ2l4HKNuqamjBJUs_PNbBnUXYN6dP5O_0Qu9sc5laWIi2FlCbuO3Fogt42Wmbkgk14-xEzl1ynIhZxIpuiGSY2O25If1jAgrm_uWgk8mmD94u87enmscwIH1GEHKAYq44DTBo_iDJTMNU_-uExZCkDDrzrPCn4UK1COqRkpgtGtiR5Irr50Y4hIPRdLe5z3wcuhzPMkucX0k50X_Wfb5Yrsj1Pkn4eBF4x7r822lg7JxI7Zvn0Z6aBbW3ZMoTEe0OhmKHXIu-fr6ZKNwrcdUNJYUBnQUmgdJavZ3l1gQJSadI9YEPq0Y2ofV7QsG9-PPvyQhN7_fVcyMfi-QIlGt8R6HbhJbdGsy6ag53B3dsLH_yrFCU2MtNkofnL944MtYsiCat48RO7mRMEyA78-gakCo1DoYtYJ2qx3NijHBMr50RP1D6tMPc-zjadg4DHA3XajygAv3J_BVs7nwmTcRp08MyLubVlsXh_E8h5Ndsd_V-RN7HLHaNp-YjlY5peYsEZbSzNR_v3A-UkzsZpNmk24xF9Uo1MVK-GIRhegT5kbk5HtihFztdor4st8" alt="portada">
				<h3 class="tituloNovedad">Manual para la adaptación local de los objetivos de desarollo sostenible.</h3>
				<p class="copete">Este manual tiene como objetivo central brindar lineamientos y sugerencias metodológicas para la incorporación de los Objetivos de Desarrollo Sostenible (ODS) como herramienta de gestión y planificación en el nivel local.</p>

			</a>
		
		</div>
	

		<div class="card">
			
			<a href="#" class="novedad">
			
				<img class="imagenNovedad" src="https://mail.google.com/mail/u/0?ui=2&ik=36b2a2fa48&attid=0.2&permmsgid=msg-f:1659728385805497086&th=17088a2c5b91b2fe&view=fimg&realattid=f_k75a8wzd0&disp=thd&attbid=ANGjdJ9hbc8CNoT8Scx5guXmuuRSFiDftQ0vWOfy9dwtWebGwxhm80_9INVywbD2x90QOb2bnEnQOihg057oCkKE1kUHGwawBamgOYQFIhSrLmX8TXdQGpNh7JL4lp8&ats=2524608000000&sz=w1920-h1007" alt="portada">
				<h3 class="tituloNovedad">Subsidios del Fondo Nacional de las Artes</h3>
				<p class="">Conoce las lineas de financiamiento del FNA para potenciar la concreción de proyectos artísticos y actividades culturales.</p>
			
			</a>

		</div>

	</section>

	<section class="section4" id="Contacto">

		<div class="contacto">

			<p>Formulario de Contacto</p>

			<div class="formulario">
			
				<input type="text" placeholder="Tu correo (*Campo obligatorio)">
				<input type="text" placeholder="Tu Nombre (*Campo obligatorio)">
				<input type="text" placeholder="Tu correo (*Campo obligatorio)">
				<textarea placeholder="Tsu mensaje..."></textarea>
				<button type="submit" class="enviar">Enviar</button>
			
			</div>

		</div>

	</section>
@endsection
