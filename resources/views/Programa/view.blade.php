<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver programas</title>
</head>

    <nav>
        <ul>
            <li><a href="{{ route('ViewInsert') }}"> Insertar Programa de Formacion </a></li>
            <li><a href="{{ route('ViewPro') }}">Ver Progrmamas de Formacion</a></li>

        </ul>
    </nav>

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
            @foreach ($objeto as $programa)       
            <td>{{ $programa->NombrePrograma }} </td> 
            <td>{{ $programa->TipoPrograma }} </td>  
            <td>{{ $programa->DuracionMeses }} </td>
            <td>{{ $programa->LineaPrograma }} </td>
            <td>
                <a href=" {{ route('DeletePro', $programa) }} "><i>ELIMINAR</i></a><br>
                <a href=" {{ route('ViewUpdate', $programa) }}"><i>ACTUALIZAR</i></a>
            </td>
           
        </tr> 
        @endforeach
    </table>

</body>
</html>
