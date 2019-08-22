<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonCadeauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bon_cadeau', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('status', ['valide', 'utiliser', 'annuler', 'rembourser']);
            $table->string('lien_facture');
            $table->string('lien_bon_achat');
            $table->date('date_achat');
            $table->boolean('affichage_prix')->default(0);
            $table->integer('montant_depart');
            $table->integer('montant_fin');
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
        Schema::dropIfExists('bon_cadeau');
    }
}
