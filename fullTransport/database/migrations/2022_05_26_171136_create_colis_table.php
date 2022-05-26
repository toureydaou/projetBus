<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colis', function (Blueprint $table) {
            $table->bigIncrements('idColis');
            $table->string('contenu');
            $table->string('nomDestinaire');
            $table->integer('telephoneDestinataire');
            $table->integer('idVoyage');
            $table->foreign('idVoyage')->references('idVoyage')->on('voyages')->onDelete('set null')->onUpdate('cascade');
            $table->integer('idClient');
            $table->foreign('idClient')->references('idClient')->on('clients')->onDelete('set null')->onUpdate('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('colis');
    }
}
