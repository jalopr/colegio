<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocPostulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_postulantes', function (Blueprint $table) {
            
            $table->integer('id_doc')->unsigned();
            $table->integer('num_ctmp')->unsigned();
            $table->timestamps();
            
            $table->foreign('id_doc')->references('id_doc')->on('doc_requerimientos');
            $table->foreign('num_ctmp')->references('num_ctmp')->on('colegiados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_postulantes');
    }
}