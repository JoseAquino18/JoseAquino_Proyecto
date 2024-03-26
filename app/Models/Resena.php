<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Resena as Resena;
use Illuminate\Notifications\Notifiable;

class User extends Resena
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table='Resena';
    protected $fillable = [
        'ResenaId',
        'name',
        'LibroId',
    ];

    public function Libro()
    {
        return $this->belongsTo(Libro::class,'LibroId' );
    }

    public function UsuarioResena()
    {
        return $this->belongsTo(UsuarioResena::class,'ResenaId' );
    }

}
