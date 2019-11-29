<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTb1ShippingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_shipping', function (Blueprint $table) {
            $table->bigIncrements('shipping_id');
            $table->string('shipping_name');
            $table->string('shipping_mobile_phone_1');
            $table->string('shipping_mobile_phone_2');
            $table->string('shipping_email');
            $table->string('shipping_address');
            $table->string('shipping_area');
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
        Schema::dropIfExists('tb1_shipping');
    }
}
