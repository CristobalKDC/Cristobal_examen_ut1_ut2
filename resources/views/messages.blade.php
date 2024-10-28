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
                    <li class="message-item" style="color: {{ $message->color }};">
                        {{ $message->text }}
                        <br>
                        @if($message->url)
                            <img src="{{ $message->url }}" alt="Imagen" class="message-image">
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
