<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventosCulturales extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'fecha', 'ubicacion', 'descripcion', 'imagen', 'autor'];
}
