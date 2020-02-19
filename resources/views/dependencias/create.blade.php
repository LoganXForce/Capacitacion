<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso API</title>
</head>
<body>
    <h1>Captura de una nueva dependecia</h1>
    <form action="{{route('dependencias.store')}}" method="POST">
        @csrf

        
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Ingrese el nombre">
        <label>Correo Electronico</label>
        <input type="text" name="email" placeholder="Ingrese el correo">
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Ingrese una contraseña">
        <input type="submit" value="Guardar">

    </form>
</body>
</html>