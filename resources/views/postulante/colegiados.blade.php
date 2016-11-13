@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Colegiado</div>
                <div class="panel-body">

                   <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('colegiados.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
                            <label for="nombres" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" required autofocus>

                                @if ($errors->has('nombres'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombres') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellido_paterno') ? ' has-error' : '' }}">
                            <label for="apellido_paterno" class="col-md-4 control-label">Apellido Paterno</label>

                            <div class="col-md-6">
                                <input id="apellido_paterno" type="text" class="form-control" name="apellido_paterno" value="{{ old('apellido_paterno') }}" required autofocus>
                                @if ($errors->has('apellido_paterno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido_paterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('apellido_materno') ? ' has-error' : '' }}">
                            <label for="apellido_materno" class="col-md-4 control-label">Apellido Materno</label>

                            <div class="col-md-6">
                                <input id="apellido_materno" type="apellido_materno" class="form-control" name="apellido_materno" value="{{ old('apellido_materno') }}" required>

                                @if ($errors->has('apellido_materno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido_materno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('especialidad') ? ' has-error' : '' }}">
                            <label for="especialidad" class="col-md-4 control-label">Especialidad </label>

                            <div class="col-md-6">
                                <input id="especialidad" type="especialidad" class="form-control" name="especialidad" value="{{ old('especialidad') }}" required>

                                @if ($errors->has('especialidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('especialidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                            <label for="region" class="col-md-4 control-label">Region </label>

                            <div class="col-md-6">
                                <input id="region" type="region" class="form-control" name="region" value="{{ old('region') }}" required>

                                @if ($errors->has('region'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('departamento') ? ' has-error' : '' }}">
                            <label for="departamento" class="col-md-4 control-label">Departamento</label>

                            <div class="col-md-6">
                                <input id="departamento" type="departamento" class="form-control" name="departamento" value="{{ old('departamento') }}" required>

                                @if ($errors->has('departamento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departamento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('universidad') ? ' has-error' : '' }}">
                            <label for="universidad" class="col-md-4 control-label">Universidad </label>

                            <div class="col-md-6">
                                <input id="universidad" type="universidad" class="form-control" name="universidad" value="{{ old('universidad') }}" required>
                                @if ($errors->has('universidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('universidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                            <label for="sexo" class="col-md-4 control-label">Sexo </label>

                            <div class="col-md-6">
                                <input id="sexo" type="sexo" class="form-control" name="sexo" value="{{ old('sexo') }}" required>
                                @if ($errors->has('sexo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                            <label for="dni" class="col-md-4 control-label">DNI </label>

                            <div class="col-md-6">
                                <input id="dni" type="dni" class="form-control" name="dni" value="{{ old('dni') }}" required>
                                @if ($errors->has('dni'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fechanac') ? ' has-error' : '' }}">
                            <label for="fechanac" class="col-md-4 control-label">Fecha de Nacimiento </label>

                            <div class="col-md-6">
                                <input id="fechanac" type="fechanac" class="form-control" name="fechanac" value="{{ old('fechanac') }}" required>
                                @if ($errors->has('fechanac'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechanac') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                            <label for="correo" class="col-md-4 control-label">Correo </label>

                            <div class="col-md-6">
                                <input id="correo" type="correo" class="form-control" name="correo" value="{{ old('correo') }}" required>
                                @if ($errors->has('correo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Direccion </label>

                            <div class="col-md-6">
                                <input id="direccion" type="direccion" class="form-control" name="direccion" value="{{ old('direccion') }}" required>
                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Telefono </label>

                            <div class="col-md-6">
                                <input id="telefono" type="telefono" class="form-control" name="telefono" value="{{ old('telefono') }}" required>
                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Grabar Datos
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
