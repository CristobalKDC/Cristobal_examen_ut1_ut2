<?php

use Illuminate\Support\Facades\Route;
use App\Models\Message;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    $messages = \App\Models\Message::all();
    return view('messages', ['messages' => $messages]);
});

// Ruta para mostrar el formulario de modificacion
Route::get('/messages/modificar', [MessageController::class, 'modificar'])->name('messages.modificar');

// Ruta para almacenar el mensaje
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
