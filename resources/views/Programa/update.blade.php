<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Programa</title>
</head>

<nav>
    <ul>
        <li><a href="{{ route('ViewInsert') }}"> Insertar Programa de Formacion </a></li>
        <li><a href="{{ route('ViewPro') }}">Ver Progrmamas de Formacion</a></li>

    </ul>
</nav>

<body>
    <form action="{{ route('UpdateBdPrograma'), $objeto->id }}" method="POST">
        @csrf

        <input type="hidden" value="{{ $objeto->id}}" name="id" id="id">

        <label for="">Nombre del programa</label>
        <input type="text" value="{{ $objeto->NombrePrograma}}" name="NombrePrograma" id="NombrePrograma"><br><br>

        <label for="">Tipo de programa</label>
        <input type="text" value="{{ $objeto->TipoPrograma}}" name="TipoPrograma" id="TipoPrograma"><br><br>

        <label for="">Duracion de meses</label>
        <input type="number" value="{{ $objeto->DuracionMeses}}" name="DuracionMeses" id="DuracionMeses"><br><br>

        <label for="">Linea del programa</label>
        <select name="LineaPrograma" id="LineaPrograma">
            <option value="{{ $objeto->LineaPrograma }}">{{ $objeto->LineaPrograma }}</option>
            <option value="Linea Quimica">Linea Quimica</option>
            <option value="Linea Tics">Linea Tics</option>
        </select> 

        <button type="submit">Enviar</button>  
    </form>
</body>
</html>