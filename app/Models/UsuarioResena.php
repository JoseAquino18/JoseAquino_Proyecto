<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\UsuarioResena as UsuarioResena;
use Illuminate\Notifications\Notifiable;

class User extends UsuarioResena
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table='UsuarioResena';
    protected $fillable = [
        'UserResenaId',
        'UserId',
        'ResenaId',
    ];

    public function Usuario()
    {
        return $this->hasOne(Usuario::class,'UserId' );
    }

    public function Resena()
    {
        return $this->hasOne(Resena::class,'ResenaId' );
    }

}
