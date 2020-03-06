@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3 m-3">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-8">
                            Bienvenido, {{ Auth::user()->name }}
                        </div>
                        <div class="col-md-4 text-right">
                            @php
                                Carbon\Carbon::setLocale(config('app.locale', 'en'))
                            @endphp
                            Hoy es {{ Carbon\Carbon::now()->translatedFormat('d \de F \de Y')}}
                        </div>
                    </div>
                    <div>
                        <div class="row text-center p-5">
                            <div class="col-md-6 p-5">
                                <a href=" {{ route('admin.news') }}" class="d-flex flex-column text-dark text-decoration-none">
                                    <i class="far fa-newspaper mb-5" style="font-size: 100px"></i>
                                    Noticias
                                </a>
                            </div>
                            <div class="col-md-6 p-5">
                                <a href=" {{ route('admin.projects') }} " class="d-flex flex-column text-dark text-decoration-none">
                                    <i class="far fa-lightbulb mb-5" style="font-size: 100px"></i>
                                    Proyectos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
