<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    use HasFactory;

    protected $fillable = [
        'cpf',
        'datanascimento',
        'email',
        'endereco',
        'historicomedico',
        'idade',
        'nome',
        'senha',
        'telefone',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'cliente_id');
    }
}
