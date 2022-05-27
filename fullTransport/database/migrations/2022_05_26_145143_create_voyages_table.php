<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->bigIncrements('idVoyage');
            $table->date('dateVoyage');
            $table->time('heure_depart');
            $table->integer('idBus');
            $table->foreign('idBus')->references('idBus')->on('buses')->onDelete('set null')->onUpdate('cascade');
            $table->integer('idLigne');
            $table->foreign('idLigne')->references('idLigne')->on('lignes')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('voyages');
    }
}
