<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Programa</title>
</head>
<body>
    <form action="{{ route('InsertPro') }}" method="POST">
        <label for="">Nombre del programa</label>
        <input type="text" value="$$" name="NombrePrograma" id="NombrePrograma"><br><br>

        <label for="">Tipo de programa</label>
        <input type="text" value="$$" name="TipoPrograma" id="TipoPrograma"><br><br>

        <label for="">Duracion de meses</label>
        <input type="number" value="$$" name="DuracionMeses" id="DuracionMeses"><br><br>

        <label for="">Linea del programa</label>
        <select name="LineaPrograma" id="LineaPrograma">
            <option value=""></option>
            <option value="">Linea Quimica</option>
            <option value="">Linea Tics</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>