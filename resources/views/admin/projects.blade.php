@extends('layouts.admin')

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
                            {{ $item->name }}
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
