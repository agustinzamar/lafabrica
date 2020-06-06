@extends('layouts.main')

@section('title', $article ? $article->title : 'Novedad')

@section('main')
<div class="portada">

    <img src="{{ $article->photo ? $article->photo->path : ''}}"
        alt="{{ $article->photo ? $article->photo->description :  'Portada' }}">

</div>

<div class="contenedor">

    <h2 class="contenedor__titulo">
        {{ $article->title }}
    </h2>

    <p class="contenedor__copete">
        {{ $article->description }}
    </p>

    @markdown($article->body)
</div>
@endsection