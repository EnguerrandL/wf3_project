<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('code_postal');
            $table->string('ville');
            $table->string('client_mail');
            $table->integer('telephone')->nullable();
        });


        Schema::table('clients', function (Blueprint $table) {

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
        Schema::dropIfExists('clients');
    }
}
