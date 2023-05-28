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

   public function Producto($id){
            $datos;
            if($id==1){
                $nombre="Choco Cono";
                $descripcion="Delicoso Choco Cono con rico sabor a chocolote";
                $img="chococono.png";
                $precio="$1500";
                $datos=[$nombre,$descripcion,$precio,$img];
                return view("Producto.Producto",$datos)->with('arrayDatos', $datos);
            }
            if($id==2){
                $nombre="Helados";
                $descripcion="Delicosos Helados con sabor a Vainilla, Fresa";
                $img="helados.jpg";
                $precio="$2000";
                $datos=[$nombre,$descripcion,$precio,$img];
                return view("Producto.Producto",$datos)->with('arrayDatos', $datos);
            }
            if($id==3){
                $nombre="Paletas";
                $descripcion="Delicosas Paletas con ingredientes especiales";
                $img="paletas.jpg";
                $precio="$3000";
                $datos=[$nombre,$descripcion,$precio,$img];
                return view("Producto.Producto",$datos)->with('arrayDatos', $datos);
            }
            $datos=[$nombre,$descripcion,$precio];
            return view("Producto.Producto",$datos)->with('arrayDatos', $datos);
    }
}
