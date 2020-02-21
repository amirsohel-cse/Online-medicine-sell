<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->integer('category_id');
            $table->string('product_price');
            $table->string('generic');
            $table->string('type');
            $table->string('quantity');
            $table->string('product_image');
            $table->string('pieces_per_pata');
            $table->string('dose');
            $table->string('size');


            $table->integer('publication_status');

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
        Schema::dropIfExists('tb1_products');
    }
}
