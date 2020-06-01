@extends('layouts.main')

@section('styles')
<link href="{{ mix('css/news.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Novedades')

@section('main')

<div class="noticias">

    @if (count($articles) > 0)

    <div class="gridNoticias">

        @foreach ($articles as $new)
        <div class="card">

            <a href="{{ route('new', $new->id) }}" class="novedad">

                <img class="imagenNovedad" src="{{ $new->photo ? asset($new->photo->path) : '' }}" alt="">
                <h3 class="tituloNovedad"> {{ $new->title }} </h3>
                <p class="copete">
                    {!! Str::limit($new->body, 200) !!}
                </p>
            </a>

        </div>
        @endforeach

    </div>

    @else
    <div class="nothing">
        <h2>Aún no hay nada aqui</h2>
    </div>
    @endif


</div>

@endsection