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

// Ruta para mostrar el formulario de creación
Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');

// Ruta para almacenar el mensaje
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');

//eliminar mensajes
Route::get('/messages/delete', [MessageController::class, 'showDeleteForm'])->name('messages.delete');
Route::post('/messages/delete', [MessageController::class, 'delete'])->name('messages.delete.store');