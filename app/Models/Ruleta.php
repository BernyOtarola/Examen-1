<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruleta extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_ganador',
    ];
}
