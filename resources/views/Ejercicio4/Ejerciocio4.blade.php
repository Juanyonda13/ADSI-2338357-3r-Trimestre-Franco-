@extends('Template.Template')
@section('plantillaWeb')
<h1>Ejercicio4</h1>
<p>Se necesita desarrollar un programa que solicite a un usuario el radio y altura de un cilindro para dar
    como respuesta el volumen y área del cilindro.</p>
    <form action="{{'Resultado_Ej4'}}" method="Post">
        {{csrf_field()}}
        <div class="container">
            <div class="row">
                <div class="col col-xxl-6 p-3">
                    <Label>Ingrese el radio del cilindro:</Label>
                    <input type="number" name="radio" step="0.001">
                </div>

            </div>
            <div class="row">
                <div class="col col-xxl-6 p-3">
                    <Label>Ingrese la altura del cilindro:</Label>
                    <input type="number" name="heigth"  step="0.001">
                </div>

            </div>
            <div class="row">
                <div class="col p-3">
                       <input type="submit" class="btn-warning" name="btn_enviar" value="Siguiente">
                </div>
            </div>
          </div>
    </form>
@endsection
