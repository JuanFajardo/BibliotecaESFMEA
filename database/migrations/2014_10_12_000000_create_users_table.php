<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('email');
            $table->string('password');

            $table->string('ci');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('nombres');
            $table->string('nivel');
            $table->string('paralelo');
            $table->string('especialidad');
            $table->string('reg_estudiante');

            $table->string('activo');
            $table->string('grupo')->comment('estudiante,adinistrador,repote');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
