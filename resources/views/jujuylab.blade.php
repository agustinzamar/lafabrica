@extends('layouts.main')

@section('styles')
    <link href="{{ asset('css/contenido.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Inicio')

@section('main')

<div class="contenedor">
	
	<div class="contenedor__item">

		<h1 class="item__titulo">LABJUJUY</h1>

		<p class="item__parrafo">LabJujuy es una interfaz de innovación ciudadana, es decir de nuevas formas de participación en las que integrantes de la comunidad son responsables de aportar a identificar problemas y soluciones que mejoren sus experiencias, calidad de vida y formas de habitar la ciudad. Esto supone entonces, que los ciudadanos dejan de ser receptores pasivos de acciones institucionales, para pasar a convertirse en protagonistas y productores de la resolución de sus propias problemáticas.
		<br>
		Tres características principales serán transversales a LabJujuy: apertura, trabajo colaborativo y experimentación. A su vez la matriz metodológica estará basada en la investigación-acción participativa. 
</p>

	</div>

	<div class="contenedor__item">
		
		<i class="material-icons" style="color: grey;">build</i>

	</div>

</div>

@endsection