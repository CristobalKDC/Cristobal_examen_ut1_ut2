<?php

namespace App\Models;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // Aseguramos que el Modelo Message Permita la Asignación Masiva
    protected $fillable = ['text'];
}
