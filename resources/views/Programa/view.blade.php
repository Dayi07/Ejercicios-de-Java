<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver programas</title>
</head>
<body>
    <table border>
        <tr>
            <td>Nombre del programa</td> 
            <td>Tipo de programa</td> 
            <td>Duracion de meses</td>
            <td>Linea del programa</td>
            <td>Acciones</td>
        </tr>
        <tr>
            <td> </td> 
            <td> </td> 
            <td> </td>
            <td> </td>
            <td>
                <a href="{{ route('DeletePro', $programa) }}"><i>E</i></a>
                <a href="{{ route('UpdatePro', $programa) }}"><i></i></a>
            </td>
        </tr>
    </table>
</body>
</html>