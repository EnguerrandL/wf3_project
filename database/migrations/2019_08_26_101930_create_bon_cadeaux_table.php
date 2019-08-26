<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonCadeauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bon_cadeaux', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('affichage_prix');
            $table->enum('status', ['valide', 'utiliser', 'annuler', 'rembourser']);
            $table->enum('type_cadeau', ['bon_cadeau', 'cheque_cadeau']);
            $table->string('lien_pdf');
        });

        Schema::table('bon_cadeaux', function (Blueprint $table) {

            $table->unsignedBigInteger('panier_id');
            $table->foreign('panier_id')->references('id')->on('paniers');
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bon_cadeaux');
    }
}
