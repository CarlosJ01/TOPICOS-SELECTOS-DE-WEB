<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\CarritoCompras;
use App\UsuaroCompras;

use Illuminate\Http\Request;

class ComprasController extends Controller {
    /* Comprar el carrito */
    public function comprar(Usuario $usuario) {
        try {
            $carritoCompras = CarritoCompras::where('id_usuario', $usuario->id)->get();
            foreach ($carritoCompras as $pedido) {
                UsuaroCompras::create([
                    'id_usuario' => $pedido->id_usuario,
                    'id_articulo' => $pedido->id_articulo,
                    'cantidad' => $pedido->cantidad
                ]);
                $pedido->delete();
            }
            return response()->json(['success' => 'Compra realizada'], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Servidor no disponible: '.$th->getMessage()], 200);
        }
    }

    /* Obtener las compras de un usuario */
    public function getCompras(Usuario $usuario) {
        try {
            $compras = UsuaroCompras::where('id_usuario', $usuario->id)->with('articulo')->get();
            return response()->json(['success' => $compras], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Servidor no disponible: '.$th->getMessage()], 200);
        }
    }
}
