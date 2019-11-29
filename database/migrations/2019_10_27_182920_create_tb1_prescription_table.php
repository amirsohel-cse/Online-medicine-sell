<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTb1PrescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_prescription', function (Blueprint $table) {
            $table->bigIncrements('prescription_id');
            $table->string('prescription_name');
            $table->string('prescription_mobile');
            $table->string('prescription_email');
            $table->string('prescription_image');
            $table->string('prescription_query');
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
        Schema::dropIfExists('tb1_prescription');
    }
}
