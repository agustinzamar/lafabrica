@extends('layouts.main')

@section('title', 'Proyectos')

@section('main')

<div class="proyectos">

    <div class="imagenes">

        <img src="{{ asset('img/cultivar.png') }}" alt="DefinirAlternativo">
        <img src="{{ asset('img/lab.png') }}" alt="DefinirAlternativo">
        <img src="{{ asset('img/normas.png') }}" alt="DefinirAlternativo">

    </div>

</div>

<div class="contenedor-proyectos">

    @if ($projects)

    @foreach ($projects as $item)

    <div class="contenedor__item" id="{{ $item->slug }}">

        <img class="contenedor__item--imagen" src="{{ asset('img/'.$item->main_picture) }}" alt="Logo del proyecto">

        <div class="contenedor__item--texto">

            <h1 class="contenedor__item--titulo">{{ $item->name }}</h1>

            <p class="item__parrafo">
                {!! $item->description !!}
            </p>

            <div class="slider">

                <div class="contenedor">

                    @foreach ($item->photos as $photo)
                    <div class="slide">
                        <img src="{{ $photo->path }}" alt="{{ $photo->description }}">
                    </div>
                    @endforeach

                </div>

                <div class="controles">
                    <span onclick="prev(this)" class="anterior"><i class="fas fa-chevron-left"></i></span>
                    <span onclick="next(this)" class="siguiente"><i class="fas fa-chevron-right"></i></span>
                    <ul class="dots">
                    </ul>
                </div>

            </div>

        </div>

    </div>

    @endforeach


    @endif

</div>

@endsection