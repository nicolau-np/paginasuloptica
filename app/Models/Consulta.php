<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'local',
        'telefone',
        'especialidade',
        'data',
        'sintomas',
    ];


}
