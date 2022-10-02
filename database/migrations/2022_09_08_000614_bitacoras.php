<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bitacoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('bitacoras', function (Blueprint $table) {
        $table->engine="InnoDB";
        $table->bigIncrements('id');
        $table->string('folio');
        $table->string('Solicitante');
        $table->string('ResponsableSistema');
        $table->string('FactibilidadTarea');
        $table->string('SistemaAfectado');
        $table->string('DependenciaSistema');
        $table->string('NombreTarea');
        $table->string('Descripcion');
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
        //
    }
   
}

