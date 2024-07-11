<?php

namespace App\Http\Controllers;

use App\Articulo;

use Illuminate\Http\Request;

class ArticulosController extends Controller {
    /* Obtener todos los articulos */
    public function getArticulos() {
        $articulos = Articulo::where('stock', '>=', '1')->orderBy('nombre')->get();
        return response()->json(['success' => $articulos], 200);
    }
}
