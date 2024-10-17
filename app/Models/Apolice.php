<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apolice extends Model
{

    use HasFactory;

    public function apolices()
    {
        return $this->hasMany(Apolice::class);
    }


}
