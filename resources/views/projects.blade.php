@extends('layouts.main')

@section('styles')
<link href="{{ mix('css/contenido.css') }}" rel="stylesheet" />
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

<<<<<<< HEAD
                    <div class="slider" >

                        <div class="contenedor">
                            @if (count($item->photos) > 0 )
                                @foreach ($item->photos as $photo)
                                    <div class="slide">
                                        <img src="{{ $photo->path }}" alt="{{ $photo->description }}">
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <div class="controles">
                            <span onclick="prev(this)" class="anterior"><i class="fas fa-chevron-left"></i></span>
                            <span onclick="next(this)" class="siguiente"><i class="fas fa-chevron-right"></i></span>
                            <ul class="dots">
                            </ul>
                        </div>

                    </div>
=======
            @if (count($item->photos) > 0 )

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

            @endif
>>>>>>> dev

        </div>

    </div>

    @endforeach


    @endif

</div>

@endsection