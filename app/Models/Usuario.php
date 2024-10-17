<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    use HasFactory;

    protected $fillable = [
        'email',
        'senha',
        'cliente_id',
    ];

    public function usuario()
    {
        return $this->hasOne(Usuario::class);
    }


}
