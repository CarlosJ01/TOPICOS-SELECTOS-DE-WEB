<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Usuario;
use App\CarritoCompras;
use App\UsuaroCompras;

use Illuminate\Http\Request;
use Validator;

class CarritoController extends Controller {
    /* Agregar articulos al carrito */
    public function agregarArticulo(Request $request) {
        $validador = Validator::make($request->all(), [
            'idUsuario' => 'required',
            'idArticulo' => 'required',
            'cantidad' => 'required'
        ]);
        if($validador->fails()){
            return response()->json(['error' => strval($validador->errors())], 200);
        }

        try {
            if ($articulo = Articulo::findOrFail($request->idArticulo) && $usuario = Usuario::findOrFail($request->idUsuario)) {
                $articulo = Articulo::findOrFail($request->idArticulo);
                if ($carrito = CarritoCompras::where('id_usuario', $request->idUsuario)->where('id_articulo', $request->idArticulo)->first()) {
                    $carrito->cantidad = ($carrito->cantidad + $request->cantidad);
                    $carrito->save();
                    $articulo->stock = $articulo->stock - $request->cantidad;
                    $articulo->save();
                    return response()->json(['success' => 'Producto agregado al carrito'], 200);
                } else {
                    CarritoCompras::create([
                        'id_usuario' => $request->idUsuario,
                        'id_articulo' => $request->idArticulo,
                        'cantidad' => $request->cantidad
                    ]);
                    $articulo->stock = $articulo->stock - $request->cantidad;
                    $articulo->save();
                    return response()->json(['success' => 'Producto agregado al carrito'], 200);
                }
            }
            return response()->json(['error' => 'Error Servidor 500'], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Servidor no disponible: '.$th->getMessage()], 200);
        }
    }

    /* Obtener el carrito de un usuario */
    public function getCarrito(Usuario $usuario) {
        try {
            $carritoCompras = CarritoCompras::where('id_usuario', $usuario->id)->with('articulo')->get();
            return response()->json(['success' => $carritoCompras], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Servidor no disponible: '.$th->getMessage()], 200);
        }
    }

    /* Quitar articulo del carrito */
    public function quitarArticulo(Request $request) {
        $validador = Validator::make($request->all(), [
            'id' => 'required',
            'cantidad' => 'required'
        ]);
        if($validador->fails()){
            return response()->json(['error' => strval($validador->errors())], 200);
        }

        try {
            if ($pedido = CarritoCompras::findOrFail($request->id)) {
                $articulo = $pedido->articulo;
                $articulo->stock =  $articulo->stock + $request->cantidad;
                $articulo->save();

                $nuevaCantidad = $pedido->cantidad -  $request->cantidad;
                if ($nuevaCantidad == 0) {
                    $pedido->delete();
                } else {
                    $pedido->cantidad = $nuevaCantidad;
                    $pedido->save();
                }
                return response()->json(['success' => 'Articulo quitado de tu carrito de compras'], 200);
            }
            return response()->json(['error' => 'Pedido no encontrado'], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Servidor no disponible: '.$th->getMessage()], 200);
        }
        return $request;
    }

    /* Cancelar la compra ??? */
    public function cancelarCompra(Usuario $usuario) {
        try {
            $carritoCompras = CarritoCompras::where('id_usuario', $usuario->id)->with('articulo')->get();
            foreach ($carritoCompras as $pedido) {
                $pedido->articulo->stock = $pedido->articulo->stock + $pedido->cantidad;
                $pedido->articulo->save();
                $pedido->delete();
            }
            return response()->json(['success' => 'Compra cancelada'], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Servidor no disponible: '.$th->getMessage()], 200);
        }
    }
}
