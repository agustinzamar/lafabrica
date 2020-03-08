@extends('layouts.main')

@section('styles')
    <link href="{{ asset('css/contenido.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Proyectos')

@section('main')

<div class="proyectos">

	<div class="imagenes">

		<img src="{{ asset('img/cultivar.png') }}" alt="DefinirAlternativo">
		<img src="{{ asset('img/lab.png') }}" alt="DefinirAlternativo">
		<img src="{{ asset('img/normas.png') }}" alt="DefinirAlternativo">

	</div>

</div>

<div class="contenedor">

    @if ($projects)

        @foreach ($projects as $item)

            <div class="contenedor__item" id="{{ $item->slug }}">

                <img class="item__imagen" src="{{ asset('img/'.$item->main_picture) }}" alt="Logo del proyecto">

                <div class="item__texto">

                    <h1 class="item__titulo titulo3">{{ $item->name }}</h1>

                    <p class="item__parrafo">
                        {!! $item->description !!}
                    </p>

                    @if (count($item->photos) > 0 )

                        <div class="gallery">

                            @foreach ($item->photos as $photo)
                                <div class="gallery__item">

                                    <img src="{{ $photo->path }}" alt="{{ $photo->description }}">

                                </div>
                            @endforeach

                        </div>

                        <div class="arrows">

                            <input type="button" class="prev" id="previous" value="<" />
                            <input type="button" class="next" id="next" value=">" />

                        </div>

                    @endif

                </div>

            </div>

        @endforeach


    @endif

</div>

@endsection
