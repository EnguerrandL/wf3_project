<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_card', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('status', ['validate', 'used', 'canceled', 'refund']);
            $table->string('link_bill');
            $table->string('link_gift');
            $table->date('date_buy');
            $table->boolean('showing_price')->default(0);
            $table->integer('begin_price');
            $table->integer('end_price')->nullable();
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
        Schema::dropIfExists('gift_card');
    }
}
