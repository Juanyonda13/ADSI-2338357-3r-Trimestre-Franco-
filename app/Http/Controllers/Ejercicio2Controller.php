<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{
    public function verEjercicio2()
    {
        return view('Ejercicio2.Ejercicio2');
    }
    public function workedHours(Request $request)
    {
       $hours=$request->hours;
       $value=$request->value;
       if($hours>=50)
       {
           $value=$value+($value*0.3);
           $salary=$hours*$value;
       }else{
           $salary=$hours*$value;
       }
       return view('Ejercicio2.resultado_Ej2',compact('salary'));
    }
}
