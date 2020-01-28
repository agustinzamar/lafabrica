@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h5 class="title">Todas las novedades</h5>
        </div>
        <div class="col-md-2">
            <a href="{{ route('admin.newNew') }}" class="btn btn-primary float-right">
                Publicar nueva
            </a>
        </div>
        <div class="col-md-12 mt-3">
            @if ($news)
                <table class="table">
                    <thead>
                        <th width="20%">Titulo</th>
                        <th width="50%">Cuerpo</th>
                        <th width="25%">Fecha de publicación</th>
                        <th width="5%">Acciones</th>
                    </thead>
                    <tbody>
                        @foreach ($news as $new)
                            <tr>
                                <td>{{ $new->title }}</td>
                                <td>{{ $new->body }}</td>
                                <td>{{ $new->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <button class="btn btn-primary btn-block">Ver</button>
                                    <button class="btn btn-danger btn-block" onclick="deleteItem(this, {{ $new->id }})">Eliminar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="text-center">
                    <h5 class="title mt-5">Aún no hay nada publicado.</h5>
                    <a href="{{ route('admin.newPhoto') }}" class="btn btn-primary block">Publicar</a>
                </div>
            @endif
        </div>
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
                                    console.log(error);
                                    toastr.error('Lo sentimos, intente de nuevo mas tarde.', 'Algo salio mal')
                                })

                            }
                        }
            });
        
        }

    </script>
@endsection