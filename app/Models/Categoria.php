<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Categoria as Categoria;
use Illuminate\Notifications\Notifiable;

class User extends Categoria
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table='Categoria';
    protected $fillable = [
        'CategoriaId',
        'name',

    ];
    public function LibroCategoria()
    {
        return $this->hasMany(LibroCategoria::class,'CategoriaId' );
    }



}
