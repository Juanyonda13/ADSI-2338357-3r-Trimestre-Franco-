@extends('Template.Template')
@section('plantillaWeb')
<h1>Ejercicio5</h1>
<p>Realizar un programa el cual reciba de un formulario la siguiente información de un estudiante:
    Nombre, Calificación del primer parcial y calificación del examen final y en seguida calcule e imprima
    el valor de la calificación definitiva, teniendo en cuenta que ella se obtiene como el 40% de la
    calificación del primer Parcial más el 60% de la calificación del examen final. Además, deberá imprimir
    un mensaje de aprobó o reprobó según corresponda y concepto valorativo el cual se obtiene de la
    siguiente manera:
</p>
<ul>
    <li>Malo si la calificación definitiva es inferior a 2.</li>
    <li>Insuficiente: si la calificación definitiva va desde 2 y es inferior a 3.</li>
    <li>Aceptable: si la calificación definitiva va desde 3 y es inferior a 4.</li>
    <li>Bueno: si la calificación definitiva va desde 4 y es inferior a 4.5.</li>
    <li>Excelente: si la calificación definitiva va desde 4.5 en adelante.</li>
</ul>
<form action="{{'Resultado_Ej5'}}" method="Post">
    {{csrf_field()}}
    <div class="container">
        <div class="row">
            <div class="col col-xxl-6 p-3">
                <Label>Ingrese su nombre:</Label>
                <input type="text" name="nombre" >
            </div>

        </div>
        <div class="row">
            <div class="col col-xxl-6 p-3">
                <Label>Ingrese la la nota del primer parcial:</Label>
                <input type="number" name="parcial1"  step="0.001">
            </div>

        </div>
        <div class="row">
            <div class="col col-xxl-6 p-3">
                <Label>Ingrese la la nota del segundo parcial:</Label>
                <input type="number" name="parcial2"  step="0.001">
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
