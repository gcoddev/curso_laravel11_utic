<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tarea';
    protected $table = 'tareas';
    protected $fillable = [
        'titulo',
        'descripcion',
        'estado',
    ];

    
    // const CREATED_AT = false;
    const CREATED_AT = "creado_el";
    const UPDATED_AT = "actualizado_el";
}
