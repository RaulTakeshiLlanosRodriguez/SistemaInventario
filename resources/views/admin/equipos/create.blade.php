@extends('layouts.admin_view')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Nuevo Equipo</h1>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('admin.equipos.store')}}">
                        @csrf
                            <div class="form-group">
                                <label for="codPatrimonial" class="required">Codigo Patrimonial</label>
                                <input type="text" name="codPatrimonial" id="codPatrimonial" class="form-control {{$errors->has('codPatrimonial')? 'is-invalid' : ''}}"
                                placeholder="Ingrese el codigo patrimonial" value="{{old('codPatrimonial', '')}}">
                                @if($errors->has('codPatrimonial'))
                                <span class="text-danger">
                                    <strong>{{$errors ->first('codPatrimonial')}}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="ubicacion" class="required">Ubicacion</label>
                                <input type="text" name="ubicacion" id="ubicacion" class="form-control {{$errors->has('ubicacion')? 'is-invalid' : ''}}"
                                placeholder="Ingrese el codigo patrimonial" value="{{old('ubicacion', '')}}">
                                @if($errors->has('ubicacion'))
                                <span class="text-danger">
                                    <strong>{{$errors ->first('ubicacion')}}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="tipo" class="required">Tipo</label>
                                <input type="text" name="tipo" id="tipo" class="form-control {{$errors->has('tipo')? 'is-invalid' : ''}}"
                                placeholder="Ingrese el codigo patrimonial" value="{{old('tipo', '')}}">
                                @if($errors->has('tipo'))
                                <span class="text-danger">
                                    <strong>{{$errors ->first('tipo')}}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="marca">Marca</label>
                                <input type="text" name="marca" id="marca" class="form-control {{$errors->has('marca')? 'is-invalid' : ''}}"
                                placeholder="Ingrese el codigo patrimonial" value="{{old('marca', '')}}">
                                @if($errors->has('marca'))
                                <span class="text-danger">
                                    <strong>{{$errors ->first('marca')}}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="tipoDescripcion">Tipo de Descripcion</label>
                                <input type="text" name="tipoDescripcion" id="tipoDescripcion" class="form-control {{$errors->has('tipoDescripcion')? 'is-invalid' : ''}}"
                                placeholder="Ingrese el codigo patrimonial" value="{{old('tipoDescripcion', '')}}">
                                @if($errors->has('tipoDescripcion'))
                                <span class="text-danger">
                                    <strong>{{$errors ->first('tipoDescripcion')}}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="numDescripcion">Numero de Descripcion</label>
                                <input type="text" name="numDescripcion" id="numDescripcion" class="form-control {{$errors->has('numDescripcion')? 'is-invalid' : ''}}"
                                placeholder="Ingrese el codigo patrimonial" value="{{old('numDescripcion', '')}}">
                                @if($errors->has('numDescripcion'))
                                <span class="text-danger">
                                    <strong>{{$errors ->first('numDescripcion')}}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{route('admin.equipos.index')}}">
                                        <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                        Regresar
                                    </a>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i>
                                        Guardar
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection