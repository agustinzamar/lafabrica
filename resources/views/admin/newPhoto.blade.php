@extends('layouts.admin')

@section('styles')
<style>
    .preview .photo-container {
        display: flex;
        height: 300px;
        background-color: #ddd
    }

    .preview .photo-container img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h5 class="title">{{ $photo ? 'Editar una foto del album de ' : 'Publicar una nueva foto en'}}
                <strong><a href="{{ route('admin.project', $project->id) }}">{{ $project->name }}</a></strong></h5>

        </div>
    </div>
    <div class="row mt-3">

        <div class="col-md-6">
            <form id="form" action="{{ $photo ?  route('photos.edit', $photo->id) : route('photos.create') }}"
                enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="photo">Elija un archivo de imagen</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo" name="photo">
                        <label class="custom-file-label" for="photo" id="label">Imagen</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="label">Agregue una descripción a su imagen</label>
                    <input type="text" class="form-control" placeholder="Descripción" name="description"
                        id="description"
                        value="{{ old('description') ? old('description') : ($photo ? $photo->description : '')}}">
                </div>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
                @endforeach
                @endif
                <input type="hidden" value="{{ Request()->project_id }}" name="project_id" id="project_id">
                <button type="submit" class="btn btn-success" id="submit">
                    Publicar &nbsp;
                    <i class="fas fa-save"></i>
                </button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="preview">
                <h6 class="text-center">Vista previa</h6>
                <div class="photo-container">
                    <img src="" alt="" id="frame">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const fileInput = document.querySelector('#photo');
        const frame = document.querySelector('#frame');
        const label = document.querySelector('#label')

        fileInput.addEventListener('change', () => {
            const file = fileInput.files[0];

            const url = URL.createObjectURL(file);
            frame.src = url;
            label.textContent = file.name;
        });

        frame.src = `{{ $photo ? $photo->path : '' }}`
</script>

@if (Session::has('success'))
<script>
    toastr.success('{{ Session::get('success') }}', 'Todo correcto.')
</script>
@elseif (Session::has('error'))
<script>
    toastr.error('{{ Session::get('error') }}', 'Algo salió mal.')
</script>
@endif
@endsection