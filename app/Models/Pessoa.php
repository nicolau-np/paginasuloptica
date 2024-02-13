<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'data_nascimento',
        'telefone',
    ];

    public function consulta(){
        return $this->hasMany(Consulta::class, 'pessoa_id');
    }
}
