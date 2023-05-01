<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constancia extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'centro_id',
        'carrera_id',
        'supervisor_id'
        
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function centro(){
        return $this->belongsTo(Centro::class, 'centro_id', 'id');
    }
    public function carrera(){
        return $this->belongsTo(Centro::class, 'carrera_id', 'id');
    }

    public function supervisor(){
        return $this->belongsTo(Supervisor::class, 'supervisor_id', 'id');
    }
}
