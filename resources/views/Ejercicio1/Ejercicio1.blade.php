@extends('Template.Template')
@section('plantillaWeb')
<h1>Ejercicio1</h1>
<p>Leer tres números y determinar si la suma de cualquier pareja de ellos es igual al tercer número. Si
    se cumple esta condición escribir "Iguales", en caso contrario, escribir "Distintas".</p>
<form action="{{'Resultado_Ej1'}}" method="Post">
    {{csrf_field()}}
    <div class="container">
        <div class="row">
            <div class="col col-xxl-6 p-3">
                <Label>Digite el numero 1: </Label>
                <input type="number" name="numero1">

            </div>
            <div class="col  col-xxl-9 p-3" >
                <Label>Digite el numero 2: </Label>
                <input type="number" name="numero2">
            </div>
            <div class="col  col-xxl-9 p-3">
                <Label>Digite el numero 3: </Label>
              <input type="number" name="numero3">
              </div>
        </div>
        <div class="row">
            <div class="col p-3">
                   <input type="submit" class="btn-warning" name="btn_enviar" value="Presione">
            </div>
        </div>
      </div>
</form>

@endsection
