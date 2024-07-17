<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = [
        'id',
        'titulo',
        'data',
        'descricao',
        'categoria_id',
        'usuario_id'
    ];

    use HasFactory;
}
