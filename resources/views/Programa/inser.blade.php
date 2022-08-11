<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Programa de formacion</title>
</head>

<nav>
    <ul>
        <li><a href="{{ route('ViewInsert') }}"> Insertar Programa de Formacion </a></li>
        <li><a href="{{ route('ViewPro') }}">Ver Progrmamas de Formacion</a></li>
    </ul>
</nav>

<body>
    <form action="{{ route('InsertPro') }}" method="POST">
        @csrf
        <label for="NombrePrograma">Nombre del programa</label>
        <input type="text" name="NombrePrograma" id="NombrePrograma"><br><br>

        <label for="TipoPrograma">Tipo de programa</label>
        <input type="text" name="TipoPrograma" id="TipoPrograma"><br><br>

        <label for="DuracionMeses">Duracion de meses</label>
        <input type="number" name="DuracionMeses" id="DuracionMeses"><br><br>

        <label for="LineaPrograma">Linea del programa</label>
        <select type="text" name="LineaPrograma" id="LineaPrograma">
            <option value=""></option>
            <option value="Linea Quimica">Linea Quimica</option>
            <option value="Linea Tics">Linea Tics</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>