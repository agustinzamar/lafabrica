<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
    <title>{{ config('app.name', 'La Fabrica') }} - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc69885e8b.js" crossorigin="anonymous"></script>
    @yield('fonts')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    @yield('styles')

</head>
<body>
	
	<header>
		
		<a href="#" class="logo"><img src="{{ asset('img/logo_gris.png') }}" alt="Logo La Fabrica"></a>

		<div class="enlaces">
			
			<a href="#">La Fabrica</a>
			<a href="#">¿Que hacemos?</a>
			<a href="#">Novedades</a>
			<a href="#">Contacto</a>
			<a href="#">Inicio</a>


			<div class="redes">

				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>

			</div>

		</div>

	</header>

    @section('main')
    @show

	<footer>
		
		<p>TODOS LOS DERECHOS RESERVADOS &copy; {{ \Carbon\Carbon::now()->format('Y') }} LA FABRICA</p>

		<div class="redes">
			
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>

		</div>

	</footer>

</body>
</html>
