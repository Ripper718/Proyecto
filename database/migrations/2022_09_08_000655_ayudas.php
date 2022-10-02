<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ayudas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->engine="InnoDB";
            $table->string('folio');
            $table->string('NombreSolicitante');
            $table->string('TipoFalla');
            $table->string('DescripcionFalla');
            $table->string('CorreoContacto');
            $table->string('NumeroContacto');
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
