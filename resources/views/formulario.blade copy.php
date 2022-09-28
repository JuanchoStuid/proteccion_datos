<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{{-- @extends('layouts.la_empleado') --}}
{{-- @section('content') --}}
<div class="col-lg-14">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Registro Empleados</h4>
          <h6 class="card-subtitle">Registrar</h6>
            <form class="form-horizontal p-t-20" method="post" action="{{url('empleados')}}">
            {{csrf_field()}}
                          
              <div class="form-group row col-lg-14">

                <div class="form-group row col-lg-7 {{ $errors->has('emp_nombres') ? ' has-danger' : '' }}">
                    <label for="emp_nombres" class="col-sm-3 control-label">Nombres*</label>
                    <div class="col-sm-8">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="ti-world"></i></div>
                          <input type="text" class="form-control" id="emp_nombres" placeholder="Nombres" name="emp_nombres" required autofocus>
  
                          @if ($errors->has('emp_nombres'))
                            <span class="form-control-feedback">
                              <strong>{{ $errors->first('emp_nombres') }}</strong>
                            </span>
                          @endif
                        </div>
                    </div>
                </div>

                <div class="form-group row col-lg-7 {{ $errors->has('emp_apellidos') ? ' has-danger' : '' }}">
                  <label for="emp_apellidos" class="col-sm-3 control-label">Apellidos*</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="ti-world"></i></div>
                        <input type="text" class="form-control" id="emp_apellidos" placeholder="Apellidos" name="emp_apellidos" required autofocus>

                        @if ($errors->has('emp_apellidos'))
                          <span class="form-control-feedback">
                            <strong>{{ $errors->first('emp_apellidos') }}</strong>
                          </span>
                        @endif
                      </div>
                  </div>
                </div>

                <div class="form-group row col-lg-5 {{ $errors->has('emp_sexo') ? ' has-danger' : '' }}">
                  <label for="emp_sexo" class="col-sm-4 control-label">Sexo</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="ti-lock"></i></div>
                        
                        <select class="form-control custom-select" data-placeholder="Sexo" tabindex="" name="emp_sexo" id="emp_sexo">
                          <option value="Masculino">Masculino</option>
                          <option value="Femenino">Femenino</option>
                          <empty>Seleccione alguno</empty>
                        </select>

                        @if ($errors->has('emp_sexo'))
                          <span class="form-control-feedback">
                            <strong>{{ $errors->first('emp_sexo') }}</strong>
                          </span>
                        @endif
                      </div>
                  </div>
                </div>

                <div class="form-group row col-lg-7 {{ $errors->has('area_are_id') ? ' has-danger' : '' }}">
                  <label for="area_are_id" class="col-sm-3 control-label">Área*</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="ti-world"></i></div>
                        <select class="form-control custom-select" data-placeholder="Área" name="area_are_id" id="area_are_id" required autofocus>
                        <option value="">-- Escoja el Área --</option>

                        @foreach ($areas as $area)
                        <option value="{{ $area['are_id'] }}">{{ $area['are_nombre'] }}</option>
                        @endforeach
                    </select>

                        @if ($errors->has('area_are_id'))
                          <span class="form-control-feedback">
                            <strong>{{ $errors->first('area_are_id') }}</strong>
                          </span>
                        @endif
                      </div>
                  </div>
                </div>

                <div class="form-group row col-lg-7 {{ $errors->has('emp_descripcion') ? ' has-danger' : '' }}">
                    <label for="emp_descripcion" class="col-sm-3 control-label">Descripción*</label>
                    <div class="col-sm-8">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="ti-world"></i></div>
                        {{-- <input type="textarea" class="form-control" id="emp_descripcion" placeholder="Descripción" name="emp_descripcion" required autofocus> --}}
                        <textarea name="emp_descripcion" id="" cols="30" rows="10"></textarea>
  
                          @if ($errors->has('emp_descripcion'))
                            <span class="form-control-feedback">
                              <strong>{{ $errors->first('emp_descripcion') }}</strong>
                            </span>
                          @endif
                        </div>
                    </div>
                  </div>

                  <div class="form-group row col-lg-7 {{ $errors->has('emp_recibir_boletin') ? ' has-danger' : '' }}">
                    <label for="emp_recibir_boletin" class="col-sm-3 control-label">Boletín*</label>
                    <div class="col-sm-8">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="ti-world"></i></div>
                        <label><input type="checkbox" id="emp_recibir_boletin"> Deseo recibir boletín

  
                          @if ($errors->has('emp_recibir_boletin'))
                            <span class="form-control-feedback">
                              <strong>{{ $errors->first('emp_recibir_boletin') }}</strong>
                            </span>
                          @endif
                        </div>
                    </div>
                  </div>

                  <div class="form-group row col-lg-7 {{ $errors->has('rol_rol_id') ? ' has-danger' : '' }}">
                    <label for="rol_rol_id" class="col-sm-3 control-label">Rol*</label>
                    <div class="col-sm-8">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="ti-world"></i></div>
                          <select class="form-control custom-select" data-placeholder="Escoja el Rol" name="rol_rol_id" id="rol_rol_id" required autofocus>
                          <option value="">-- Escoja el Rol --</option>
  
                          @foreach ($roles as $rol)
                          <option value="{{ $rol['rol_id'] }}">{{ $rol['rol_nombre'] }}</option>
                          @endforeach
                      </select>
  
                          @if ($errors->has('rol_rol_id'))
                            <span class="form-control-feedback">
                              <strong>{{ $errors->first('rol_rol_id') }}</strong>
                            </span>
                          @endif
                        </div>
                    </div>
                  </div>

              </div>
              <br>

              <div class="form-group row m-b-0">
                <div class="offset-sm-3 col-sm-9">
                  <button type="submit" class="btn btn-info waves-effect waves-light">Guardar</button>
                </div>
              </div>

            </form>
        </div>
      </div>
    </div>
    {{-- @endsection --}}
</body>
</html>