@extends('layouts.main')

@section('title', 'Novedades')

@section('main')

<div class="noticias">

    <p class="subtitle">Novedades</p>

    @if (count($articles) > 0)

    <div class="gridNoticias">

        @foreach ($articles as $item)

        <div class="novedades__card" onclick="window.location.href = '{{ route('new', $item->id) }}'">

            <img class="novedades__card--img" src="{{ $item->photo ? asset($item->photo->path) :  '' }}"
                alt="{{ $item->photo ? $item->photo->description :  'Portada' }}">
            <h3 class="novedades__card--title">{{ $item->title }}</h3>
            <p class="novedades__card--body">
                {{ Str::words($item->description, 15, '...') }}
            </p>

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