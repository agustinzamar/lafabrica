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

		<a href={{ route('home') }} class="logo"><img src="{{ asset('img/logo.png') }}" alt="Logo La Fabrica"></a>

		<div class="enlaces">


			<a href="{{ route('home') }}"><li><span>Inicio</span></li></a>
			<a href="{{ route('home') }}#Nosotros"><li><span>Sobre Nosotros</span></li></a>
			<a href="{{ route('home') }}#ComoTrabajamos"><li><span>¿Cómo Trabajamos?</span></li></a>
			<a href="{{ route('home') }}#QueHacemos"><li><span>¿Qué Hacemos?</span></li></a>
			<a href="{{ route('home') }}#Novedades"><li><span>Novedades</span></li></a>
			<a href="{{ route('home') }}#Contacto"><li><span>Contacto</span></li></a>


			<div class="redes">

				<a target="_blank" href="https://www.facebook.com/lafabricajujuy/"><i class="fab fa-facebook-f"></i></a>
				<a target="_blank" href="https://twitter.com/lafabricajujuy?s=08"><i class="fab fa-twitter"></i></a>
				<a target="_blank" href="https://www.instagram.com/lafabricajujuy/?igshid=1icfi0o2fdrua"><i class="fab fa-instagram"></i></a>
				<a target="_blank" href="https://www.linkedin.com/company/fundaci%C3%B3nlaf%C3%A1brica/about/"><i class="fab fa-linkedin-in"></i></a>

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

				<a href="{{ route('home') }}"><li><span>Inicio</span></li></a>
				<a href="{{ route('home') }}#Nosotros"><li><span>Sobre Nosotros</span></li></a>
				<a href="{{ route('home') }}#ComoTrabajamos"><li><span>¿Como Trabajamos?</span></li></a>
				<a href="{{ route('home') }}#QueHacemos"><li><span>¿Que Hacemos?</span></li></a>
				<a href="{{ route('home') }}#Novedades"><li><span>Novedades</span></li></a>
				<a href="{{ route('home') }}#Contacto"><li><span>Contacto</span></li></a>

			</ul>

			<div class="redes">

				<a target="_blank" href="https://www.facebook.com/lafabricajujuy/"><i class="fab fa-facebook-f"></i></a>
				<a target="_blank" href="https://twitter.com/lafabricajujuy?s=08"><i class="fab fa-twitter"></i></a>
				<a target="_blank" href="https://www.instagram.com/lafabricajujuy/?igshid=1icfi0o2fdrua"><i class="fab fa-instagram"></i></a>
				<a target="_blank" href="https://www.linkedin.com/company/fundaci%C3%B3nlaf%C3%A1brica/about/"><i class="fab fa-linkedin-in"></i></a>

			</div>

		</nav>

	</aside>


    @section('main')
    @show

	<footer>

		<p>TODOS LOS DERECHOS RESERVADOS &copy; {{ \Carbon\Carbon::now()->format('Y') }} - LA FÁBRICA.</p>

		<div class="redes">

			<a target="_blank" href="https://www.facebook.com/lafabricajujuy/"><i class="fab fa-facebook-f"></i></a>
			<a target="_blank" href="https://twitter.com/lafabricajujuy?s=08"><i class="fab fa-twitter"></i></a>
			<a target="_blank" href="https://www.instagram.com/lafabricajujuy/?igshid=1icfi0o2fdrua"><i class="fab fa-instagram"></i></a>
			<a target="_blank" href="https://www.linkedin.com/company/fundaci%C3%B3nlaf%C3%A1brica/about/"><i class="fab fa-linkedin-in"></i></a>

		</div>

	</footer>
    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/header2.js')}}"></script>
    <script src="{{asset('js/gallery.js')}}"></script>

</body>
</html>
