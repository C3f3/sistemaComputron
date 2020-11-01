<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>mensaje enviado desde la pagina</h1>
<p><Strong>Nombre: </Strong> {{$contacto['Nombre']}}</p>
<p><Strong>Asunto: </Strong> {{$contacto['Asunto']}}</p>
<p><Strong>Correo: </Strong> {{$contacto['Email']}}</p>
<p><Strong>Mensaje: </Strong> {{$contacto['Mensaje']}}</p>

    
</body>
</html>