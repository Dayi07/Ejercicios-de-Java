<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver programas de formacion</title>
</head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
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
                <a  href="{{--{{ route('DeletePro', $programa) }} --}}"  ><i>ELIMINAR</i></a><br>
                <a href=" {{ route('ViewUpdate', $programa) }}"><i>ACTUALIZAR</i></a>
            </td>
            <td>
                <button onclick="eliminar( {{$programa->id}} )">Eliminar</button>
            </td>
            
            </tr> 
            @endforeach
            </table>
            
<script type="text/javascript">
            
    function eliminar(id){
            
        swal({
            title: "¿Estas seguro de eliminar?",
            text: "Si eliminas este programa no podra ser recuperado",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            
        .then((willDelete) => {
                       
            if (willDelete) {
                location.href = "delete/" + id + "/";
            
                swal("Poof! El programa fue eliminado!", {
                icon: "success",
                });    
            
            } else {
                swal("El programa no se elimino");
            }
        });     
    }
            
            
</script>
</body>
</html>
