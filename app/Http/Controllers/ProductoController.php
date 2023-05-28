<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
   public function Index(){

        return view("Producto.Index");
   }

   public function ListadoProductos(){
        return view("Producto.ListadoProductos");
   }
}
