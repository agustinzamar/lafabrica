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
            <form id="form">
                <div class="form-group mb-3">
                    <label for="photo">Elija un archivo de imagen</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="photo" name="photo">
                      <label class="custom-file-label" for="inputGroupFile01" id="label"></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="label">Agregue un pequeño copete a su imagen</label>
                    <input type="text" class="form-control" placeholder="Copete" name="description" id="description">
                </div>
                <button type="button" class="btn btn-success btn-block float-right" id="submit">Publicar</button>
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
        const submit = document.querySelector('#submit');
        const form = document.querySelector('#form');

        fileInput.addEventListener('change', () => {
            const file = fileInput.files[0];

            const url = URL.createObjectURL(file);
            frame.src = url;
            label.textContent = file.name;
        });

        submit.addEventListener('click', () => {

            const data = new FormData(form);

            console.log(data.get('photo'));

            axios.post(route('photos.create'), data)
                .then(res => {
                    form.reset();
                    frame.src="";
                    label.textContent="";

                    toastr.success('¡Listo! Ya podes ver la foto en la galeria.', 'Foto publicada.');
                })
                .catch(err => {
                    console.log(err.response.data);
                    toastr.error('Lo sentimos, intente de nuevo mas tarde.', 'Algo salio mal.');
                })
        })
    </script>
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
