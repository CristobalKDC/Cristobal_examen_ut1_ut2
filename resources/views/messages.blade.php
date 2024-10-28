<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Estilo adicional para la lista de mensajes */
        .message-item {
            margin-bottom: 15px; /* Espaciado entre los mensajes */
        }
        .message-image {
            max-width: 100px; /* Tamaño máximo de la imagen */
            max-height: 100px;
            display: block; /* Asegura que la imagen esté en una nueva línea */
            margin-top: 5px; /* Espaciado entre el texto y la imagen */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
            <ul>
                @foreach($messages as $message)

                
                    @if($message->negrita == 1 && $message->subrayado == 0)
                        <li><b>{{ $message->text }}</b></li>
                    @elseif($message->subrayado == 1 && $message->negrita == 0)
                        <li><u>{{ $message->text }}</u></li>
                    @elseif($message-> negrita == 0 && $message->subrayado == 0)
                        <li>{{ $message->text }}</li>
                    @elseif($message-> negrita == 1 && $message->subrayado == 1)
                        <li><u><b>{{ $message->text }}</b></u></li>
                    @endif
                    
                @endforeach
            </ul>
            <button type="submit" onclick="window.location.href='/messages/modificar';">Modificar</button>
        @endif
    </div>
</body>
</html>
