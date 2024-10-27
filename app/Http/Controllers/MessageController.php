<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Array de colores permitidos
    protected $allowedColors = ['rojo', 'azul', 'negro', 'verde'];

    // Mostrar el formulario para crear un nuevo mensaje
    public function create()
    {
        return view('create');
    }

    // Almacenar un nuevo mensaje en la base de datos
    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'text' => 'required|max:255',
            'color' => 'required|in:red,blue,black,green', // Validar el color
        ], [
            'color.in' => 'COLOR NO VALIDO. Debe ser uno de los siguientes: rojo,azul,negro o verde.',
        ]);

        // Crear y guardar el nuevo mensaje
        Message::create([
            'text' => $request->text,
            'color' => $request->color, // Guardamos el color
        ]);

        // Redirigir a la vista de mensajes con un mensaje de éxito
        return redirect()->route('messages.create')->with('success', 'Mensaje creado con éxito.');
    }
}
