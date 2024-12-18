<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'rg',
        'motivo_consulta',
        'data_consulta',
        'hora',
    ];

}