<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarritoCompras extends Model
{
    protected $table = 'carritos_compras';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_usuario', 'id_articulo', 'cantidad'
    ];

    public function articulo() {
        return $this->belongsTo('App\Articulo', 'id_articulo', 'id');
    }
}
