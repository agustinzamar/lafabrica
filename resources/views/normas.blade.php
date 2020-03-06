@extends('layouts.main')

@section('styles')
    <link href="{{ asset('css/contenido.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Inicio')

@section('main')

<div class="proyectos">
	
	<div class="imagenes">
		
		<img src="{{ asset('img/cultivar.png') }}" alt="DefinirAlternativo">
		<img src="{{ asset('img/lab.png') }}" alt="DefinirAlternativo">
		<img src="{{ asset('img/normas.png') }}" alt="DefinirAlternativo">
	
	</div>

</div>

<div class="contenedor">
	
	<div class="contenedor__item" id="Cultivar">

		<img class="item__imagen" src="{{ asset('img/cultivar.png') }}" alt="DefinirAlternativo">

		<div class="item__texto">
			
			<h1 class="item__titulo titulo1">CULTIVAR</h1>

			<p class="item__parrafo">Cultivar es un programa de formación e investigación. Buscamos a través de él, contribuir al desarrollo de las organizaciones sociales, la responsabilidad social y la sociedad civil mediante herramientas, actividades y acciones que permitan aumentar su compromiso, capacidades, sustentabilidad e impacto social. <br>
			Para ello proponemos desplegar una serie de propuestas educativas, asesoramiento y consultorías para la orientacion y difusion de conocimientos relevantes.</p>

			<div class="gallery">

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3647069/pexels-photo-3647069.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/2295287/pexels-photo-2295287.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3617457/pexels-photo-3617457.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3647069/pexels-photo-3647069.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/2295287/pexels-photo-2295287.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3617457/pexels-photo-3617457.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

			</div>

			<div class="arrows">

				<input type="button" class="prev" id="previous" value="<" />
				<input type="button" class="next" id="next" value=">" />

			</div>

		</div>		

	</div>

	<div class="contenedor__item" id="LabJujuy">
		
		<img class="item__imagen" src="{{ asset('img/lab.png') }}" alt="DefinirAlternativo">

		<div class="item__texto">

			<h1 class="item__titulo titulo2">LABJUJUY</h1>

			<p class="item__parrafo">LabJujuy es una interfaz de innovación ciudadana, es decir de nuevas formas de participación en las que integrantes de la comunidad son responsables de aportar a identificar problemas y soluciones que mejoren sus experiencias, calidad de vida y formas de habitar la ciudad. Esto supone entonces, que los ciudadanos dejan de ser receptores pasivos de acciones institucionales, para pasar a convertirse en protagonistas y productores de la resolución de sus propias problemáticas. <br>
			Tres características principales serán transversales a LabJujuy: apertura, trabajo colaborativo y experimentación. A su vez la matriz metodológica estará basada en la investigación-acción participativa.</p>

			<div class="gallery">

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3647069/pexels-photo-3647069.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/2295287/pexels-photo-2295287.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3617457/pexels-photo-3617457.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3647069/pexels-photo-3647069.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/2295287/pexels-photo-2295287.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3617457/pexels-photo-3617457.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

			</div>

			<div class="arrows">

				<input type="button" class="prev" id="previous" value="<" />
				<input type="button" class="next" id="next" value=">" />

			</div>

		</div>
	
	</div>

	<div class="contenedor__item" id="Normas">

		<img class="item__imagen" src="{{ asset('img/normas.png') }}" alt="DefinirAlternativo">
		
		<div class="item__texto">

			<h1 class="item__titulo titulo3">LAS NORMAS QUE NOS NORMAN</h1>

			<p class="item__parrafo">Las Normas Que Nos Norman es una plataforma de información virtual que busca promover y difundir los marcos legales para situaciones cotidianas. Es una forma de  aprehender colectivamente sobre el ejercicio y exigibilidad de derechos y responsabilidades frente al Estado y las empresas.</p>

			<div class="gallery">

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3647069/pexels-photo-3647069.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/2295287/pexels-photo-2295287.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3617457/pexels-photo-3617457.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3647069/pexels-photo-3647069.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/2295287/pexels-photo-2295287.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

				<div class="gallery__item">
					
					<img src="https://images.pexels.com/photos/3617457/pexels-photo-3617457.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">

				</div>

			</div>

			<div class="arrows">

				<input type="button" class="prev" id="previous" value="<" />
				<input type="button" class="next" id="next" value=">" />

			</div>


		</div>

	</div>

</div>

@endsection