@extends('admin.sidebar.layout')
@section('content')

<form action="{{route('guardadmin')}}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
<div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Alta administador</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="input-group">
                <span class="input-group-addon">@</span>
                @if($errors->first('idadmin'))
                <i> {{ $errors->first('idadmin') }} </i>
                @endif <br>
                <input type="text" class="form-control" name="idadmin" placeholder="Clave">
              </div>
              <div class="input-group">
                <span class="input-group-addon">@</span>
                @if($errors->first('nomadmin'))
                <i> {{ $errors->first('nomadmin') }} </i>
                @endif <br>
                <input type="text" class="form-control" name="nomadmin" placeholder="Nombre Admin">
              </div>
              <div class="input-group">
                <span class="input-group-addon">@</span>
                @if($errors->first('apepadmin'))
                <i> {{ $errors->first('apepadmin') }} </i>
                @endif <br>
                <input type="text" class="form-control" name="apepadmin" placeholder="Apellido Paterno">
              </div>
              <div class="input-group">
                <span class="input-group-addon">@</span>
                @if($errors->first('apemadmin'))
                <i> {{ $errors->first('apemadmin') }} </i>
                @endif <br>
                <input type="text" class="form-control" name="apemadmin" placeholder="Apellido Materno">
              </div>
              <div class="form-group">
                  <div class="radio">
                    <label>
                    Sexo<input type="radio" name="sexo" id="f" value="f">
                      Femenino
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="sexo" id="m" value="m">
                     Masculino
                    </label>
                  </div>
                  <div class="input-group">
                <span class="input-group-addon">@</span>
                @if($errors->first('puestoadmin'))
                <i> {{ $errors->first('puestoadmin') }} </i>
                @endif <br>
                <input type="text" class="form-control" name="puestoadmin" placeholder="Puesto">
              </div>
              <div class="form-group">
                  <div class="radio">
                    Activo<input type="radio" name="activo" id="si" value="si" checked>Si
                          <input type="radio" name="activo" id="no" value="no">No
                  </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
@endsection()