@extends('layouts.main')

@section('styles')
    <link href="{{ asset('css/contenido.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Inicio')

@section('main')

<div class="contenedor">
	
	<div class="contenedor__item">

		<h1 class="item__titulo">CULTIVAR</h1>

		<p class="item__parrafo">Cultivar es un programa de formación e investigación. Buscamos a través de él, contribuir al desarrollo de las organizaciones sociales, la responsabilidad social y la sociedad civil mediante herramientas, actividades y acciones que permitan aumentar su compromiso, capacidades, sustentabilidad e impacto social.
		<br>
		Para ello proponemos desplegar una serie de propuestas educativas, asesoramiento y consultorías para la orientacion y difusion de conocimientos relevantes.</p>

	</div>

	<div class="contenedor__item">
		
		<i class="material-icons" style="color: green;">spa</i>

	</div>

</div>

@endsection