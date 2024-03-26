<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Libro as Libro;
use Illuminate\Notifications\Notifiable;

class User extends Libro
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table='Libro';
    protected $fillable = [
        'LibroId',
        'name',
        'disponibles',
        'UserId',
        'AutorId',
    ];

    public function Autor()
    {
        return $this->belongsTo(Autor::class,'AutorId' );
    }

    public function Resena()
    {
        return $this->hasMany(Resena::class,'LibroId' );
    }

    public function LibroCategoria()
    {
        return $this->hasMany(LibroCategoria::class,'LibroId' );
    }

}
