@extends('layouts.admin')

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

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5 class="title">Publicar una novedad</h5>
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
            <form id="form" action={{ route('news.create') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title" class="label">Titulo de la novedad</label>
                    <input type="text" class="form-control" placeholder="Titulo" name="title" id="title" required value={{ old('title') }}>
                </div>
                <div class="form-group mb-3">
                    <label for="photo">Agregue una foto</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="photo" name="photo" required value='{{ old('photo') }}'>
                      <label class="custom-file-label" for="inputGroupFile01" id="label">Foto </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="label">Escriba un copete para su imagen</label>
                    <input type="text" class="form-control" placeholder="Copete" name="description" id="description" value={{ old('description') }}>
                </div>
                <div class="form-group">
                    <textarea  class="form-control ckeditor" name="body" id="body" cols="30" rows="10" required placeholder="Cuerpo de la noticia">{{old('body')}}</textarea>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                <button type="submit" class="btn btn-success btn-block float-right" id="submit">Publicar</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- text editor scripts -->
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.config.language = 'es'
    </script>
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
