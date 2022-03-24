<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('carne');
            $table->string('nombre');
            $table->string('foto');
            $table->integer('año');
            $table->string('sede');
            /* Relacion de tabla */
            $table->bigInteger('carrera_id')->unsigned();
            //      Llave foranea que hace referencia a id que pertenece a carreras - Que se borre en cascada
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
