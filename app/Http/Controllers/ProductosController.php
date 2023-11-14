<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function InicioProductos(){

        $productos = Producto::orderBy('id', 'desc')->paginate();

        return view('productos.inicio_productos', compact('productos'));
    }

    public function DetalleProducto(Producto $producto){
        return view('productos.detalle_producto', compact('producto'));
    }
}
