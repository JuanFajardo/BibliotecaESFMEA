<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->text('foto')->nullable();
            $table->text('titulo');
            $table->string('autor');
            $table->text('descripcion');
            $table->text('archivo');
            $table->string('tipo');
            $table->integer('id_categoria');
            $table->integer('id_subcategoria');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
