<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

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
    @yield('styles')

</head>
<body>
	
	<header id="header">
		
		<a href="#" class="logo"><img src="{{ asset('img/logo.png') }}" alt="Logo La Fabrica"></a>

		<div class="enlaces">
			
			<a href="#">La Fabrica</a>
			<a href="#hacemos">¿Que hacemos?</a>
			<a href="#novedades">Novedades</a>
			<a href="#contacto">Contacto</a>
			<a href="#">Inicio</a>


			<div class="redes">

				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>

			</div>

		</div>

		<div class="btnMenu">
			
			<i class="fas fa-bars icons"></i>

		</div>

	</header>

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

</body>
</html>