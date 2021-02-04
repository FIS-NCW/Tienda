<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function mostrar(){
        $productos=Producto::where("cantidad_inventario",">",0)->paginate(12);
        return view('productos',compact("productos"));    
    }
}
