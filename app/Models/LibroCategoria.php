<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\LibroCategoria as LibroCategoria;
use Illuminate\Notifications\Notifiable;

class User extends LibroCategoria
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table='LibroCategoria';
    protected $fillable = [
        'LibroCategoriaId',
        'LibroId',
        'CategoriaId',
    ];

    public function Libro()
    {
        return $this->hasOne(Libro::class,'LibroId' );
    }

    public function Categoria()
    {
        return $this->hasOne(Categoria::class,'CategoriaId' );
    }

}
