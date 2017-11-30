@extends('layouts.app')

@section('content')

  <ol class="breadcrumb">
    <div class="btn-group" role="group" aria-label="Button group">
      <a href="{{url('/clientes')}}" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>
      <a href="{{ url()->current() }}" class="btn btn-info"><i class="fa fa-refresh" aria-hidden="true"></i> Actualizar seccion</a>
    </div>
  </ol>

  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        Datos de: <b>{{$cliente->nombre_cliente}}</b>
      </div>
      <div class="card-block">
        <div class="row">
          <div class="col-sm-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Datos generales</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Reparaciones</a>
            </div>
          </div>
          <div class="col-sm-10">
            <div class="tab-content" id="v-pills-tabContent">
              {!! Form::model($cliente, ['route' => ['clientes.update', $cliente->id], 'method' => 'PUT']) !!}

              <div class="form-group row">
                <label for="nombre_cliente" class="col-sm-2 form-control-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nombre_cliente" placeholder="Nombre cliente" value="{{$cliente->nombre_cliente}}" name="nombre_cliente">
                </div>
              </div>
              <div class="form-group row">
                <label for="dni_cliente" class="col-sm-2 form-control-label">DNI</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="dni_cliente" placeholder="DNI cliente" value="{{$cliente->dni_cliente}}" name="dni_cliente">
                </div>
              </div>
              <div class="form-group row">
                <label for="telefono_cliente" class="col-sm-2 form-control-label">Telefono</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="telefono_cliente" placeholder="Telefono cliente" value="{{$cliente->telefono_cliente}}" name="telefono_cliente">
                </div>
              </div>
              <div class="form-group row">
                <label for="direccion_cliente" class="col-sm-2 form-control-label">Direccion</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="direccion_cliente" placeholder="Direccion cliente" value="{{$cliente->direccion_cliente}}" name="direccion_cliente">
                </div>
              </div>
              <div class="form-group row">
                <label for="email_cliente" class="col-sm-2 form-control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email_cliente" placeholder="Direccion cliente" value="{{$cliente->email_cliente}}" name="email_cliente">
                </div>
              </div>
              <div class="form-group row">
                <label for="observaciones" class="col-sm-2 form-control-label">Observaciones</label>
                <div class="col-sm-10">
                  <textarea name="observaciones" rows="4" class="form-control">{{$cliente->observaciones}}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-offset-8 col-sm-10">
                  <button type="submit" class="btn btn-secondary">Actualizar</button>
                </div>
              </div>

              {!! Form::close() !!}
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                Reparaciones

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
