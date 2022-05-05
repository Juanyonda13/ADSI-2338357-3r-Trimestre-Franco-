<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class Ejercicio5Controller extends Controller
{
    public function verEjercicio5()
    {
        return view('Ejercicio5.Ejercicio5');
    }
    public function note(Request $request)
    {
          $nombre=$request->nombre;
          $parcial1=$request->parcial1;
          $parcial2=$request->parcial2;
          $value=(($parcial1*0.4)+($parcial2*0.6));
          if($value<2.0)
          {
             $respuesta=$nombre.' eres malo y tu nota es '.$value;
          }elseif($value>=2.0 && $value<=3.0)
          {
            $respuesta=$nombre.' eres insuficiente y tu nota es '.$value;
          }elseif($value>3.0 && $value<=4.0)
          {
            $respuesta=$nombre.' eres aceptable y tu nota es '.$value;
          }elseif($value>4.0 && $value<=4.5)
          {
            $respuesta=$nombre.' eres bueno y tu nota es '.$value;
          }elseif($value>4.5)
          {
            $respuesta=$nombre.' eres Exelente y tu nota es '.$value;
          }

        return view('Ejercicio5.resultado_Ej5',compact('respuesta'));
    }
}
