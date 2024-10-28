<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function modificar()
    {
        return view('modificar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|max:255',
            'subrayado' => 'required|in:1,0',
            'subrayado' => 'required|in:1,0',
        ], [
            'subrayado.in' => 'Eleccion de subrayado no valida.',
            'negrita.in' => 'Eleccion de negrita no valida.',
        ]);

        Message::modificar([
            'text' => $request->text,
            'subrayado' => $request->subrayado,
            'negrita' => $request->negrita
        ]);

        return redirect()->route('messages.create')->with('success', 'Mensaje modificado con éxito.');

    }
}
