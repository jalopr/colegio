<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColegiadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegiados', function (Blueprint $table) {
            $table->increments('num_ctmp');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('especialidad');
            $table->integer('region')->unsigned();
            $table->string('departamento');
            $table->string('universidad');
            $table->string('sexo');
            $table->string('dni');
            $table->date('fechanac');
            $table->string('correo');
            $table->string('direccion');
            $table->string('telefono');
            $table->timestamps();

            $table->foreign('region')->references('id_reg')->on('regiones');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colegiados');
    }
}
