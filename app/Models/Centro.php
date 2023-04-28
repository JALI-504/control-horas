<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'supervisor_id',
        'nombre_centro',
        'facultad',
        'carrera'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function supervisor(){
        return $this->belongsTo(Supervisor::class, 'supervisor_id', 'id');
    }

}
