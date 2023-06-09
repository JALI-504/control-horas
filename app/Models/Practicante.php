<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practicante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cuenta',
        'tel',
        'email',
        'residencia'
        ];
}
