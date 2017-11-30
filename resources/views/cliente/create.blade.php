@extends('layouts.app') @section('content')

<ol class="breadcrumb">
  <div class="btn-group" role="group" aria-label="Button group">
    <a href="{{url('/clientes')}}" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>
    <a href="{{ url()->current() }}" class="btn btn-info"><i class="fa fa-refresh" aria-hidden="true"></i> Actualizar seccion</a>
  </div>
</ol>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          Clientes
        </div>
        <div class="card-block">
          <form action="{{route('clientes.store')}}" method="post">
              {{csrf_field()}}
            <div class="form-group row">
              <label for="nombre_cliente" class="col-sm-2 form-control-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre y apellido">
              </div>
            </div>
            <div class="form-group row">
              <label for="dni_cliente" class="col-sm-2 form-control-label">DNI</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="dni_cliente" name="dni_cliente" placeholder="DNI">
              </div>
            </div>
            <div class="form-group row">

              <label for="telefono_cliente" class="col-sm-2 form-control-label">Telefono</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" placeholder="Telefono">
              </div>
            </div>
            <div class="form-group row">

              <label for="direccion_cliente" class="col-sm-2 form-control-label">Direccion</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" placeholder="Direccion">
              </div>
            </div>
            <div class="form-group row">

              <label for="email_cliente" class="col-sm-2 form-control-label">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email_cliente" name="email_cliente" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">

              <label for="observaciones" class="col-sm-2 form-control-label">Observaciones</label>
              <div class="col-sm-10">
                <textarea name="observaciones" rows="4" class="form-control">Observaciones</textarea>
              </div>
            </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-secondary">Crear</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
