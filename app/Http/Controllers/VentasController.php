<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function Ventas(){
        return view("Ventas.ventas");
   }
}
