<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'user_id';
    //relacion muchos a muchos
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //funcion muchos a muchos
    public function articulos(){
        return $this->belongsToMany(Articulo::class,'articulo_user','user_id','articulo_id');
    }
    //funcion muchos a muchos
    public function empleados(){
        return $this->belongsToMany(Empleado::class,'empleado_user','user_id','empleado_id');
    }
    public function articulos_uno_a_muchos(){
        return $this->hasMany(Articulo::Class,'user_id');
    }
}
