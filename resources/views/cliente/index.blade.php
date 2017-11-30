@extends('layouts.app')

@section('content')

  <ol class="breadcrumb">
    <div class="btn-group" role="group" aria-label="Button group">
      <a href="{{ url()->current() }}" class="btn btn-info"><i class="fa fa-refresh" aria-hidden="true"></i> Actualizar seccion</a>
      <a href="{{route('clientes.create')}}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Crear cliente</a>
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
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <th>Nombre</th>
                  <th>DNI</th>
                  <th>Telefono</th>
                  <th>Direccion</th>
                  <th>Email</th>
                  <th>Acciones</th>
                </thead>
                <tbody>
                  @foreach ($clientes as $c)
                    <tr>
                      <td>{{$c->nombre_cliente}}</td>
                      <td>{{$c->dni_cliente}}</td>
                      <td>{{$c->telefono_cliente}}</td>
                      <td>{{$c->direccion_cliente}}</td>
                      <td>{{$c->email_cliente}}</td>
                      <td>
                        <div class="btn-group btn-group-xs" role="group" aria-label="Toolbar with button groups">
                          <a href="{{url('cliente/'.$c->id)}}" class="btn btn-primary">Editar</a>
                         {!! Form::open(['method' => 'DELETE', 'route' => ['clientes.destroy', $c->id] ]) !!}
                         {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                         {!! Form::close() !!}
                        </div>
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
