<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio1Controller extends Controller
{
    public function verEjercicio1()
    {
        return view('Ejercicio1.Ejercicio1');
    }
    public function suma(Request $request)
    {
        $numero1=$request-> numero1;
        $numero2=$request-> numero2;
        $numero3=$request-> numero3;

        $suma12=$numero1+$numero2;
        $suma13=$numero1+$numero3;
        $suma23=$numero2+$numero3;
         if($suma12 ==$numero3)
        {
            $respuesta='la suma del numero '.$numero1.' con el numero '.$numero2.' da como resultado el tercer numero el cual es '.$numero3;

        }elseif( $suma13 ==$numero3)
        {
            $respuesta='la suma del numero '.$numero1.' con el numero '.$numero3.' da como resultado el tercer numero el cual es '.$numero3;

        }elseif( $suma23==$numero3)
        {
            $respuesta='la suma del numero '.$numero2.' con el numero '.$numero3.' da como resultado el tercer numero el cual es '.$numero3;

        }else
        {
            $respuesta='Ningun numero coincide :(';
        }

        return view('Ejercicio1.Resultado_Ej1', compact('respuesta'));
    }
}
