@extends('layouts.admin_view')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Muebles</h1>
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
                        <a href="{{route('admin.muebles.create')}}" class="btn btn-primary mb-3">Nuevo Mueble</a>
                        <a href="{{route('reportMueble')}}" class="btn btn-danger">Ver Reporte</a>
                        <table class="table table-bordered" id="muble_table">
                            <thead>
                                <tr>
                                    <th>Codigo Patrimonial</th>
                                    <th>Tipo</th>
                                    <th>Unidad de Medida</th>
                                    <th>Estado</th>
                                    <th>Procedencia</th>
                                    <th>Ubicacion</th>
                                    <th>Observacion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($muebles as $mueble)
                                <tr>
                                    <td>{{$mueble->codPatrimonial}}</td>
                                    <td>{{$mueble->tipo}}</td>
                                    <td>{{$mueble->unidadMedida}}</td>
                                    <td>{{$mueble->estado}}</td>
                                    <td>{{$mueble->procedencia}}</td>
                                    <td>{{$mueble->ubicacion}}</td>
                                    <td>{{$mueble->observacion}}</td>
                                    <td>
                                        <a href="{{route('admin.muebles.edit', $mueble->id)}}" class="btn btn-success">
                                            Editar
                                        </a>
                                        <form action="{{ route('admin.muebles.destroy', $mueble->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
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
        $('#muble_table').DataTable();
    });
</script>
@endsection
