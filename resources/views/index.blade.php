@extends('layouts.main')

@section('styles')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

{!! htmlScriptTagJsApi() !!}
@endsection

@section('title', 'Inicio')

@section('main')

<div class="portada">

    <h1> #ConstruyendoCiudadania </h1>
    <img src="{{ asset('img/wave.svg') }}" class="wave" alt="wave">

</div>

<section class="section1" id="Nosotros">

    <p>EN LA <span>FÁBRICA</span> DISEÑAMOS, DESARROLLAMOS E IMPLEMENTAMOS ESTRATEGIAS DE PARTICIPACIÓN CIUDADANA PARA
        CONTRIBUIR AL DESARROLLO DE LA SOCIEDAD CIVIL.</p>

</section>

<section class="section2" id="ComoTrabajamos">

    <p>¿Cómo trabajamos?</p>

    <div class="trabajos">

        <div class="fortalecer item">

            <img src="{{ asset('img/fortalecer.png') }}" alt="Fortalecer">
            <!-- <h2>Fortalecer</h2> -->
            <p>Desarrollamos conocimientos y herramientas para consolidar el compromiso y mejorar las capacidades de las
                Organizaciones de la Sociedad Civil</p>

        </div>

        <div class="intervenir item">

            <img src="{{ asset('img/intervenir.png') }}" alt="Intervenir">
            <!-- <h2>Intervenir</h2> -->
            <p>Generamos acciones de participación y trabajo colaborativo con la comunidad.</p>

        </div>

        <div class="compartir item">

            <img src="{{ asset('img/compartir-1.png') }}" alt="Compartir">
            <!-- <h2>Compartir</h2> -->
            <p>Brindamos información sobre derechos ciudadanos para fortalecer el ejercicio de la Democracia.</p>

        </div>


    </div>

    <img src="{{ asset('img/wave6.svg') }}" class="wave" alt="wave">

</section>

<section class="section3" id="QueHacemos">

    <p>¿Qué hacemos?</p>

    <div class="cultivar item">

        <img src="{{ asset('img/cultivar.png') }}" alt="DefinirAlternativo">

        <div class="texto">

            <h2>Cultivar</h2>
            <p>Espacio de formación e investigación en el campo de las organizaciones sociales, la responsabilidad
                social y la sociedad civil.</p>
            <a class="saberMas1" href="{{ route('projects') }}#Cultivar">Saber mas</a>

        </div>

    </div>

    <div class="jujuyLab item">

        <img class="ocultar" src="{{ asset('img/lab.png') }}" alt="DefinirAlternativo">

        <div class="texto right">

            <h2>LabJujuy</h2>
            <p class="right"> Interfaz de participación ciudadana y trabajo colaborativo.</p>
            <a class="saberMas2" href="{{ route('projects') }}#LabJujuy">Saber mas</a>

        </div>

        <img class="mostrar" src="{{ asset('img/lab.png') }}" alt="DefinirAlternativo">

    </div>

    <div class="normas item">

        <img src="{{ asset('img/normas.png') }}" alt="DefinirAlternativo">

        <div class="texto">

            <h2>Las Normas que nos Norman</h2>
            <p>Plataforma para difundir y promover los derechos ciudadanos.</p>
            <a class="saberMas3" href="{{ route('projects') }}#LasNormasQueNosNorman">Saber mas</a>

        </div>

    </div>

</section>

@if (isset($articles))

<section class="section5" id="Novedades">

    <p>Novedades</p>

    <div class="novedades">

        @foreach ($articles as $item)

        <div class="card">

            <a href=" {{ route('new', $item->id) }} " class="novedad">

                <img class="imagenNovedad" src="{{ $item->photo ? asset($item->photo->path) :  '' }}"
                    alt="{{ $item->photo ? $item->photo->description :  'Portada' }}">
                <h3 class="tituloNovedad">{{ $item->title }}</h3>
                <p class="copete">{{ $item->photo ? $item->photo->description :  '' }}</p>

            </a>

        </div>

        @endforeach

    </div>

    <a href="{{ route('news') }}" class="enviar">Todas las noticias</a>

</section>

@endif

<section class="section4" id="Contacto">

    <div class="contacto">

        <p>Formulario de Contacto</p>

        @if (Session::has('error'))
        <script>
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: '¡Ups!',
                text: 'Lo sentimos, algo salió mal.',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
        @endif

        @if (Session::has('success'))
        <script>
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: '¡Gracias!',
                text: 'Su consulta fue enviada.',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
        @endif

        <form class="formulario" method="POST" action="{{ route('email.contact') }}">

            @csrf

            <input type="email" name="email" value="{{ old("email") }}" placeholder="Tu correo (*Campo obligatorio)"
                required>
            @error('email')
            <span class="error">{{ $message }}</span>
            @enderror
            <input type="text" name="name" value="{{ old("name") }}" min="3" max="32"
                placeholder="Tu Nombre (*Campo obligatorio)" required>
            @error('name')
            <span class="error">{{ $message }}</span>
            @enderror
            <input type="text" name="subject" value="{{ old("subject") }}" min="3" max="15" placeholder="Asunto">
            @error('subject')
            <span class="error">{{ $message }}</span>
            @enderror
            <textarea name="body" placeholder="Tu mensaje...(*Campo obligatorio)" minlength="20"
                maxlength="1000">{{ old("body") }}</textarea>
            @error('body')
            <span class="error">{{ $message }}</span>
            @enderror
            {!! htmlFormSnippet() !!}
            @error('g-recaptcha-response')
            <span class="error">{{ $message }}</span>
            @enderror
            <button type="submit" class="enviar">Enviar</button>

        </form>

    </div>

</section>

@endsection