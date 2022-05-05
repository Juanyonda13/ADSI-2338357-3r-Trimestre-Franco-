@extends('Template.Template')
@section('plantillaWeb')
<h1>Ejercicio2</h1>
<p>A un trabajador le pagan según sus horas y una tarifa de pago por horas. Si la cantidad de horas
    trabajadas es mayor a 50 horas. La tarifa se incrementa en un 30% para las horas extras. Calcular el
    salario del trabajador dadas las horas trabajadas y la tarifa.</p>
    <form action="{{'Resultado_Ej2'}}" method="Post">
        {{csrf_field()}}
        <div class="container">
            <div class="row">
                <div class="col col-xxl-6 p-3">
                    <Label>Digite sus horas trabajadas :</Label>
                    <input type="number" name="hours">

                </div>
                <div class="col  col-xxl-9 p-3" >
                    <Label>Digite precio por hora :</Label>
                    <input type="number" name="value" placeholder="$">
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
