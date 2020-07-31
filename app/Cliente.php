<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    const ESTADOS_CIVIS = [
      1 => 'Solteiro',
      2 => 'Casado',
      3 => 'Divorciado',
      4 => 'União Estável',
      5 => 'Viúvo'
    ];

    protected $fillable = [
        'nome',
        'documento',
        'email',
        'telefone',
        'inadimplente',
        'data_nasc',
        'sexo',
        'estado_civil'
    ];
}
