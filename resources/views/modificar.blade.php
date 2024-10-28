<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Mensaje</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Modificar Mensaje</h1>

        <form action="{{ route('messages.store') }}" method="POST">
            @csrf
            
            <div class="form-group"> 
                <label for="text">Mensaje a modificar:</label>
                <select name="messages[]" id="messages" class="form-control" style="width: 100%; height: 150px;" >
                    @foreach ($messages as $message)
                        <option value="{{ $message->id }}">{{ $message->text }}</option>
                    @endforeach
                </select>
            </div>

            
            <div class="form-group">
            <label for="subrayado">Subrayado:</label>
            
                <select name="subrayado" id="subrayado" class="form-control" required>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                    <option value="666">Error</option>
                </select>
                @if ($errors->has('subrayado'))
                    <div class="text-danger">{{ $errors->first('subrayado') }}</div>
                @endif

            <label for="negrita">negrita:</label>
            
            <select name="negrita" id="negrita" class="form-control" required>
                <option value="1">Si</option>
                <option value="2">No</option>
                <option value="666">Error</option>
            </select>
            @if ($errors->has('negrita'))
                <div class="text-danger">{{ $errors->first('negrita') }}</div>
            @endif
            </div>

            

            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
        </form>
    </div>
</body>
</html>

