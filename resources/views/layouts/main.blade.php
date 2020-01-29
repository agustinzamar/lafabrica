<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="DEPRO"/>
	<meta name="theme-color" content="#F93B80">
	

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
    <title>{{ config('app.name', 'La Fabrica') }} - @yield('title')</title>

    <!-- Scripts -->
    <!-- <script src="{{asset('js/header.js')}}"></script> -->
    @yield('scripts')

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/fc69885e8b.js" crossorigin="anonymous"></script>
    @yield('fonts')

    <!-- Styles -->
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @yield('styles')

</head>
<body>
	
	<header id="header" class="header">
		
		<a href="#" class="logo"><img src="{{ asset('img/logo.png') }}" alt="Logo La Fabrica"></a>

		<div class="enlaces">


			<a href="#"><li><span>Inicio</span></li></a>
			<a href="#Nosotros"><li><span>Sobre Nosotros</span></li></a>
			<a href="#ComoTrabajamos"><li><span>¿Como Trabajamos?</span></li></a>
			<a href="#QueHacemos"><li><span>¿Que Hacemos?</span></li></a>
			<!-- <a href="#Novedades"><li><span>Novedades</span></li></a> -->
			<a href="#Contacto"><li><span>Contacto</span></li></a>


			<div class="redes">

				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>

			</div>

		</div>

		<button class="js-menu-show header__menu-toggle material-icons">menu</button>

	</header>

	<aside class="js-side-nav side-nav">
	
		<nav class="js-side-nav-container side-nav__container">
			
			<header class="side-nav__header">

				<button class="js-menu-hide header__menu-toggle material-icons">menu</button>

			</header>

			<ul class="side-nav__content">

				<a href="#"><li><span>Inicio</span></li></a>
				<a href="#Nosotros"><li><span>Sobre Nosotros</span></li></a>
				<a href="#ComoTrabajamos"><li><span>¿Como Trabajamos?</span></li></a>
				<a href="#QueHacemos"><li><span>¿Que Hacemos?</span></li></a>
				<!-- <a href="#Novedades"><li><span>Novedades</span></li></a> -->
				<a href="#Contacto"><li><span>Contacto</span></li></a>

			</ul>

			<div class="redes">

				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>

			</div>

		</nav>

	</aside>


    @section('main')
    @show

	<footer>
		
		<p>TODOS LOS DERECHOS RESERVADOS &copy; {{ \Carbon\Carbon::now()->format('Y') }} - LA FABRICA.</p>

		<div class="redes">
			
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>

		</div>

	</footer>
    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/header2.js')}}"></script>
    <script src="{{asset('js/header3.js')}}"></script>

</body>
</html>