<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesCommanderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_commander', function (Blueprint $table) {
            $table->bigIncrements('id');
        });

        Schema::table('services_commander', function (Blueprint $table) {
            $table->unsignedBigInteger('panier_id');
            $table->foreign('panier_id')->references('id')->on('paniers');


            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_commander');
    }
}
