@extends('layouts.admin_view')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Equipos</h1>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="content">
    <div class="container-fluid">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('admin.equipos.create')}}" class="btn btn-primary mb-3">Nuevo Equipo</a>
                        <table class="table table-bordered" id="equipo_table">
                            <thead>
                                <tr>
                                    <th>Codigo Patrimonial</th>
                                    <th>Ubicacion</th>
                                    <th>Tipo</th>
                                    <th>Marca</th>
                                    <th>Tipo Descripcion</th>
                                    <th>Numero de Descripcion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($equipos as $equipo)
                                <tr>
                                    <td>{{$equipo->codPatrimonial}}</td>
                                    <td>{{$equipo->ubicacion}}</td>
                                    <td>{{$equipo->tipo}}</td>
                                    <td>{{$equipo->marca}}</td>
                                    <td>{{$equipo->tipoDescripcion}}</td>
                                    <td>{{$equipo->numDescripcion}}</td>
                                    <td>
                                        <a href="{{route('admin.equipos.edit', $equipo->id)}}" class="btn btn-success">
                                            Editar
                                        </a>
                                        <form action="{{ route('admin.equipos.destroy', $equipo->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#equipo_table').DataTable();
    });
</script>
@endsection