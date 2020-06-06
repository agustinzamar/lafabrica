@extends('layouts.main')

@section('title', $article ? $article->title : 'Novedad')

@section('main')
<div class="portada">

    <img src="{{ $article->photo ? $article->photo->path : ''}}" alt="">

</div>

<div class="contenedor">

    <h2 class="contenedor__titulo">
        {{ $article->title }}
    </h2>

    <p class="contenedor__copete">
        @markdown($article->body)
    </p>
</div>
@endsection