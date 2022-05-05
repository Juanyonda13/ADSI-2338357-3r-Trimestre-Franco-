@extends('Template.Template')
@section('plantillaWeb')
<h1>Ejercicio3</h1>
<p>Sumar los números enteros solicitando al usuario el número hasta el que se desea sumar; validar
    que el número máximo a ingresar sea 1000, ej: Digite los números a sumar: 5 -> Sumara los
    números 1,2,3,4,5 = Respuesta=> 15</p>
    <form action="{{'Resultado_Ej3'}}" method="Post">
        {{csrf_field()}}
        <div class="container">
            <div class="row">
                <div class="col col-xxl-6 p-3">
                    <Label>Hasta que numero deseas llegar? :</Label>
                    <input type="number" name="num">

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
