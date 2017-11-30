<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Notify;


class ClientesController extends Controller
{
    public function index()
    {
      $clientes = Cliente::all();

      return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
      return view('cliente.create');
    }

    public function store(Request $request)
    {
      $clientes = new Cliente([
        'nombre_cliente' => $request->get('nombre_cliente'),
        'dni_cliente' => $request->get('dni_cliente'),
        'telefono_cliente' => $request->get('telefono_cliente'),
        'direccion_cliente' => $request->get('direccion_cliente'),
        'email_cliente' => $request->get('email_cliente'),
        'observaciones' => $request->get('observaciones')
      ]);

      $clientes->save();

      Notify::success('', $title = 'Datos creados correctamente', $options = []);

      return redirect('/clientes');
    }
}
