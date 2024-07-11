<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable {
    use Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $fillable = [
        'usuario', 'password', 'nombre', 'curp', 'rfc', 'direccion', 'correo'
    ];

    protected $hidden = [
        'password',
    ];
}
