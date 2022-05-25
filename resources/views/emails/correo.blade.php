<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de administación de recurso humano</title>
</head>

<body>
    <p>Buen día {{ $mensajecorreo['name'] }} a continuación encontrará un link en el que podrá contestar una encuesta de
        gran valor para la compañia, por favor diligenciela honestamente.</p><br>
    <p>{{ $mensajecorreo['body'] }}</p><br>
</body>

</html>
