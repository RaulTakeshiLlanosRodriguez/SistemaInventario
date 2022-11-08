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
                        <a href="{{route('admin.mubles.create')}}" class="btn btn-primary mb-3">Nuevo Mueble</a>
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
                                @foreach($mubles as $muble)
                                <tr>
                                    <td>{{$muble->codPatrimonial}}</td>
                                    <td>{{$muble->tipo}}</td>
                                    <td>{{$muble->unidadMedida}}</td>
                                    <td>{{$muble->estado}}</td>
                                    <td>{{$muble->procedencia}}</td>
                                    <td>{{$muble->ubicacion}}</td>
                                    <td>{{$muble->observacion}}</td>
                                    <td>
                                        <a href="{{route('admin.mubles.edit', $muble->id)}}" class="btn btn-success">
                                            Editar
                                        </a>
                                        <form action="{{ route('admin.mubles.destroy', $muble->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
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