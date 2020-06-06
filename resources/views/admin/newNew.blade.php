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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/codemirror.min.css" />
<!-- Editor's Style -->
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($article)
            <h5 class="title">Editar</h5>
            @else
            <h5 class="title">Publicar una novedad</h5>
            @endif
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <form id="form" action={{ $article ? route('news.edit', $article->id) : route('news.create') }}
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="title" class="label">Título</label>
                            <input type="text" class="form-control" placeholder="Titulo" name="title" id="title"
                                required value="{{ old('title') ? old('title') : ($article ? $article->title : '') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="photo">Imagen principal</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photo" name="photo">
                                <label class="custom-file-label" for="inputGroupFile01" id="label">
                                    Seleccione un archivo
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="label">Describa la imagen</label>
                            <input type="text" class="form-control" placeholder="Descripción de la imagen"
                                name="photo_description" id="photo_description"
                                value="{{ old('photo_description')? old('photo_description') : ($article ? ($article->photo ? $article->photo->description : '') : '') }}">
                        </div>
                        <div class="form-group">
                            <label for="description" class="label">Copete</label>

                            <textarea placeholder="Copete" name="description" class="form-control" required
                                id="description">{{ old('description')? old('description') : ($article ? $article->description : '') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="preview">
                            <h6 class="text-center">Vista previa de imagen</h6>
                            <div class="photo-container">
                                <img src="" alt="" id="frame">
                            </div>
                            <div class="text-container">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div id="editor"></div>
                            <input type="hidden" name="body" id="body">
                        </div>
                    </div>
                </div>


                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
                @endforeach
                @endif
                <button type="submit" class="btn btn-success" id="submit">
                    Publicar &nbsp;
                    <i class="fas fa-save"></i>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- text editor scripts -->
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
<script>
    const Editor = toastui.Editor;

    const editor = new Editor({
        el: document.querySelector('#editor'),
        height: '500px',
        initialValue: `{!! old("body") ? old("body") : ($article ? $article->body : '') !!}`,
        initialEditType: 'markdown',
        previewStyle: 'vertical',
        linkAttribute: {
        target: '_blank',
        contenteditable: 'false',
        rel: 'noopener noreferrer'
        },
    });

    const form = document.querySelector('#form')
    form.addEventListener('submit', () => {
        this['body'].value = editor.getMarkdown()
    })
    
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

    frame.src = `{{ $article ? ($article->photo ? $article->photo->path : '') : '' }}`
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