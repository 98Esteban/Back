<?php

namespace App\Http\Controllers\CustomControllers;

use App\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductoCustomController extends Controller
{
    function deleteProducto(Request $request, $id){
        $producto = Producto::find($id);
        $producto->delete();

        $response = [
            "code" => "00000",
            "message" => "ok",
            "data" => $producto->toArray()
        ];
        return $response;
    }

    function createProducto(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->marca = $request->input('marca');
        $producto->cantidad = $request->input('cantidad');
        $producto->save();
        return $producto;

    }

    function getProducto(Request $request){
        return $producto = Producto::all();
    }

    function updateProducto(Request $request, $id){
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->marca = $request->input('marca');
        $producto->cantidad = $request->input('cantidad');
        $producto->save();
        $response = [
            "code" => "00000",
            "message" => "ok",
            "data" => $producto->toArray()
        ];
        return $response;
    }
}
