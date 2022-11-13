@extends('layouts.admin_view')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Nuevo Mueble</h1>
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
                        <form method="POST" action="{{route('admin.muebles.store')}}">
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
                                <label for="unidadMedida" class="required">Unidad de Medida</label>
                                <input type="text" name="unidadMedida" id="unidadMedida" class="form-control {{$errors->has('unidadMedida')? 'is-invalid' : ''}}"
                                placeholder="Ingrese el codigo patrimonial" value="{{old('unidadMedida', '')}}">
                                @if($errors->has('unidadMedida'))
                                <span class="text-danger">
                                    <strong>{{$errors ->first('unidadMedida')}}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Estado</label>
                                <select class="form-control" name="estado" id="estado" class="form-control {{$errors->has('estado')? 'is-invalid' : ''}}" value="{{old('estado','')}}">
                                  <option>Bueno</option>
                                  <option>Regular</option>
                                  <option>Malo</option>
                                  <option>Defectuoso</option>
                                  <option>Obsoleto</option>
                                </select>
                                @if($errors->has('estado'))
                                <span class="text-danger">
                                    <strong>{{$errors ->first('estado')}}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="procedencia">Procedencia</label>
                                <input type="text" name="procedencia" id="procedencia" class="form-control {{$errors->has('procedencia')? 'is-invalid' : ''}}"
                                placeholder="Ingrese el codigo patrimonial" value="{{old('procedencia', '')}}">
                                @if($errors->has('procedencia'))
                                <span class="text-danger">
                                    <strong>{{$errors ->first('procedencia')}}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="ubicacion">Ubicacion</label>
                                <input type="text" name="ubicacion" id="ubicacion" class="form-control {{$errors->has('ubicacion')? 'is-invalid' : ''}}"
                                placeholder="Ingrese el codigo patrimonial" value="{{old('ubicacion', '')}}">
                                @if($errors->has('ubicacion'))
                                <span class="text-danger">
                                    <strong>{{$errors ->first('ubicacion')}}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="observacion">Observacion</label>
                                <input type="text" name="observacion" id="observacion" class="form-control {{$errors->has('observacion')? 'is-invalid' : ''}}"
                                placeholder="Ingrese el codigo patrimonial" value="{{old('observacion', '')}}">
                                @if($errors->has('observacion'))
                                <span class="text-danger">
                                    <strong>{{$errors ->first('observacion')}}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{route('admin.muebles.index')}}">
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
