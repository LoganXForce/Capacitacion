<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso API</title>
</head>
<body>
    <table>
        <thead>

            <td>ID</td>
            <td>Nombre</td>
            <td>Correo</td>
        </thead>
        <tbody>
            @foreach ($dependencias as $depe)   
            <tr>
            <td>{{$depe->depe_depe}}</td>
            <td>{{$depe->depe_nombre}}</td>
            <td>{{$depe->depe_email}}</td>
            <td>
                <button>Editar</button>
                <button>Eliminar</button>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>