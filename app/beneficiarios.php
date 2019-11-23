<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beneficiarios extends Model
{
    protected $fillable = [
        'nombre', 'usuario', 'password', 'correo'
    ];
}
