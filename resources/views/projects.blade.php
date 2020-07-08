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
                    <div class="slide" data-src="{{ $photo->path }}">
                        <img src="{{ $photo->path }}" alt="{{ $photo->description }}">
                        <div class="slide__footer">
                            {{ Str::words($photo->description, 10, '...') }}
                        </div>
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

    <section class="lightview hide" id="gallery">

        <div class="lightview__container">
            <img src="" alt="" id="gallery_frame">

            <label for="gallery_frame" id="gallery_text"></label>
        </div>
    </section>

    @endforeach


    @endif

</div>

@endsection

@section('scripts')
<script>
    const slidesList = document.querySelectorAll('.slide')
    const gallery = document.querySelector('#gallery')
    const gallery_frame = document.querySelector('#gallery_frame')
    const gallery_text = document.querySelector('#gallery_text')

    Array.from(slidesList).forEach(slide => {
        
        slide.addEventListener('click', function(){

            gallery_frame.src = this.children[0].src
            gallery_frame.alt = this.children[0].alt
            gallery_text.textContent = this.children[0].alt
            gallery.classList.remove('hide')

        })


    })

    gallery.addEventListener('click', function(e){

        if(e.target === this){
            this.classList.add('hide');
        }
    })

</script>
@endsection