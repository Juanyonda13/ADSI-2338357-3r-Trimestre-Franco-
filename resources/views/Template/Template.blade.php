<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Actividad</title>
</head>
<body>


    <ul class="nav justify-content-start">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('http://127.0.0.1:8000')}}">Actividad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Ejercicio1')}}"  method="Post">Ejercicio 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Ejercicio2')}}" method="Post">Ejercicio 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Ejercicio3')}}" method='Post'>Ejercicio 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('Ejercicio4')}}" method='Post'>Ejercicio 4</a>
          </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('Ejercicio5')}}" method='Post'>Ejercicio 5</a>
        </li>
      </ul>
      <div class="container">
        @yield('plantillaWeb')
    </div>
</body>
</html>
