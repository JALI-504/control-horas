<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     * 
     */

    protected $model = User::class;

    protected $fillable = [
        'name',
        'tel',
        'email',
        'password',
        'residencia'
    
    ];
    // public function centro(){
    //     return $this->belongsTo(Centro::class, 'user_id', 'id');
    // }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function centro(){
        return $this->belongsTo(Centro::class, 'centro_id', 'id');
    }
    public function supervisor(){
        return $this->belongsTo(Supervisor::class, 'supervisor_id', 'id');
    }
}
