@extends('layouts.admin')

@section('styles')
<style>
    a,
    a:hover {
        text-decoration: none;
        outline: 0;
        color: #000;
    }

    .card {
        padding: 1rem;

        transition: all ease .2s;
    }

    .card:hover {
        box-shadow: 0 0 20px 5px #dadada;
    }

    .card h2 {
        font-size: 20px;
        font-weight: bold;
    }

    img {
        max-height: 200px;
        object-fit: contain;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h5 class="title">Elija un proyecto</h5>
        </div>
    </div>
    <div class="row mt-5">
        @if ($projects)
        @foreach ($projects as $item)
        <div class="col-md-4 text-center">
            <div class="card">
                <a href="{{ route('admin.project', $item->id) }}" class="d-flex flex-column">
                    <img src=" {{ asset('img/'.$item->main_picture) }} " alt="">
                    <h2>{{ $item->name }}</h2>
                </a>
            </div>
        </div>
        @endforeach
        @else
        <div class="text-center">
            <h5 class="title mt-5">Aún no hay proyectos.</h5>
        </div>
        @endif
    </div>
</div>
@endsection