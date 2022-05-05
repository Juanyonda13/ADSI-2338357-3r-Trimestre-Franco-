<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio4Controller extends Controller
{
    public function verEjercicio4()
    {
        return view('Ejercicio4.Ejerciocio4');
    }
    public function cylinder(Request $request)
    {
        $radio=$request->radio;
        $heigth=$request->heigth;
        $volume=3.14*($radio*$radio)*$heigth;
        $area=(2*3.14)*$radio*$heigth+(2*3.14)*($radio*$radio);
        $response='El volumen del cilindro es: '.$volume.' y el area es :'.$area;
        return view('Ejercicio4.resultado_Ej4',compact('response'));
    }

}
