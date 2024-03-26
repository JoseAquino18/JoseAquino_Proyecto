<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->id();
            $table->string('Username', 255);
            $table->string('Password', 255);
            $table->string('Email', 255);
        });

        Schema::create('Libro', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 255);
            $table->string('Disponbible', 255);
            $table->unsignedBigInteger('UserId');
            $table->foreign('UserId')->references('id')->on('User');
            $table->unsignedBigInteger('AutorId');
            $table->foreign('AutorId')->references('id')->on('Autor');
        });



        Schema::create('Categoria', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 255);
        });


        Schema::create('Autor', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 255);
            $table->string('Password', 255);
            $table->string('Email', 255);
        });

        Schema::create('Resena', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 255);
            $table->unsignedBigInteger('LibroId');
            $table->foreign('LibroId')->references('id')->on('Libro');
        });

        Schema::create('LibroCategoria', function (Blueprint $table) {
            $table->unsignedBigInteger('LibroId');
            $table->unsignedBigInteger('CategoriaId');
            $table->primary(['LibroId', 'CategoriaId']);
            $table->foreign('LibroId')->references('id')->on('Libro');
            $table->foreign('CategoriaId')->references('id')->on('Categoria');
        });

        Schema::create('UsuarioResena', function (Blueprint $table) {
            $table->unsignedBigInteger('UserId');
            $table->unsignedBigInteger('ResenaId');
            $table->primary(['UserId', 'ResenaId']);
            $table->foreign('UserId')->references('id')->on('User');
            $table->foreign('Resena')->references('id')->on('Resena');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Autor');
        Schema::dropIfExists('Categoria');
        Schema::dropIfExists('Libro');
        Schema::dropIfExists('LibroCategoria');
        Schema::dropIfExists('Resena');
        Schema::dropIfExists('User');
        Schema::dropIfExists('UsuarioResena');
    }
};
