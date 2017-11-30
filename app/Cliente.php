<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
      'nombre_cliente',
      'dni_cliente',
      'telefono_cliente',
      'direccion_cliente',
      'email_cliente',
      'observaciones'
    ];
}
