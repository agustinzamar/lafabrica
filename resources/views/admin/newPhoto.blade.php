@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5 class="title">Publicar una nueva foto</h5>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="preview">
                <h6 class="text-center">Vista previa</h6>
                <div class="photo-container">
                    <img src="" alt="" id="frame">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <form id="form" action="{{ route('photos.create') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="photo">Elija un archivo de imagen</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo" name="photo" required value="{{ old('photo') }}">
                      <label class="custom-file-label" for="photo" id="label">Imagen</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="label">Agregue un pequeño copete a su imagen</label>
                    <input type="text" class="form-control" placeholder="Copete" name="description" id="description" value="{{ old('description') }}">
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                <input type="hidden" value="{{ Request()->project_id }}" name="project_id" id="project_id">
                <button type="submit" class="btn btn-success btn-block float-right" id="submit">Publicar</button>
            </form>
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

@section('styles')
    <style>
        .preview .photo-container{
            display: flex;
        }

        .preview .photo-container img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
