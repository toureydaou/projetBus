<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('idTickets');
            $table->integer('numPlace');
            $table->string('depart');
            $table->string('arrivee');
            $table->integer('prix');
            $table->string('statut');
            $table->integer('idVoyage');
            $table->integer('idClient');
            $table->foreign('idVoyage')->references('idVoyage')->on('voyages')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('tickets');
    }
}
