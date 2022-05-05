<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
 public function verEjercicio3()
 {
     return view('Ejercicio3.Ejercicio3');
 }
 public function sum(Request $request)
 {
     $num=$request->num;
     $value=0;
     if($num>=1000)
     {
        $response='lo lamento mucho pero no puedes ingresar numeros mayores a 1000 :(';
     }else{
     for($i=0;$i<=$num;$i++)
     {
        $value=$value+$i;
     }
     $response='La respuesta de la suma es: '.$value;
    }

     return view('Ejercicio3.resultado_Ej3',compact('response'));
 }
}
