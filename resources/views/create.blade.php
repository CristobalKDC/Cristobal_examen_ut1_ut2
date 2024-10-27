<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Mensaje</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Registrar Nuevo Mensaje</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            <!-- Añadir mensaje -->
            <div class="form-group"> 
                <label for="text">Mensaje:</label>
                <textarea name="text" id="text" class="form-control" required></textarea>
            </div>
            <!-- Añadir color -->
            <div class="form-group">
        <label for="color">Color:</label>
        <!-- Añadimos para seleccionar color especifico -->
        <select name="color" id="color" class="form-control" required>
                    <option value="red">Rojo</option>
                    <option value="blue">Azul</option>
                    <option value="black">Negro</option>
                    <option value="green">Verde</option>
                </select>
    </div>
            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
        </form>
    </div>
</body>
</html>

