@extends('layouts.admin')

@section('styles')
<style>
    td img {
        max-height: 100px;
        object-fit: contain;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h5 class="title">Galeria de fotos de <strong>{{ $project->name }}</strong></h5>
        </div>
        <div class="col-md-2">
            <a href="{{ route('admin.newPhoto', $project->id) }}" class="btn btn-primary float-right">
                Publicar nueva
            </a>
        </div>
    </div>
    <div class="row mt-5">
        @if (count($project->photos) > 0)
        <table class="table">
            <thead class="">
                <th width="20%">Vista previa</th>
                <th width="40%">Copete</th>
                <th width="25%">Fecha de publicación</th>
                <th width="5%">Acciones</th>
            </thead>
            <tbody>
                @foreach ($project->photos as $photo)
                <tr>
                    <td><img src='{{ asset($photo->path) }}' alt="foto publicada" style="width:100%;"></td>
                    <td>{{ $photo->description }}</td>
                    <td>{{ $photo->created_at->format('d/m/Y') }}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary btn-sm mr-2"
                                href="{{ route('admin.newPhoto', [$project->id,$photo->id]) }}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <button class="btn btn-danger btn-sm" onclick="deleteItem(this, {{ $photo->id }})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="col-md-12 text-center">
            <div class="card p-3">
                Este proyecto no tiene fotos publicadas aún.
            </div>
        </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
    const deleteItem = (sender, id) => {

            bootbox.confirm({
                title: '¿Desea continuar?',
                message: 'La foto se eliminará permanentemente',
                buttons: {
                    cancel: {
                        label: 'Cancelar'
                    },
                    confirm: {
                        label: 'Aceptar'
                    }
                },
                callback: (result) => {
                            if(result){

                                axios.post(route('photos.delete'),{
                                    id: id
                                })
                                .then(res => {
                                    console.log(res);
                                    const tableBody = document.querySelector('table').children[1];
                                    const row = sender.closest('tr');
                                    tableBody.removeChild(row);

                                    toastr.success('La foto fue eliminada.', 'Correcto');
                                })
                                .catch(error => {
                                    console.log(error.response.data);
                                    toastr.error('Lo sentimos, intente de nuevo mas tarde.', 'Algo salio mal')
                                })

                            }
                        }
            });

        }

</script>
@endsection