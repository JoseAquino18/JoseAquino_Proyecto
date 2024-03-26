<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Autor as Autor;
use Illuminate\Notifications\Notifiable;

class User extends Autor
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table='Autor';
    protected $fillable = [
        'AutorId',
        'password',
        'email',
    ];

    public function Libro()
    {
        return $this->hasMany(Libro::class,'AutorId' );
    }



}
