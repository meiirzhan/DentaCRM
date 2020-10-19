<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_plans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('treatment_card_id')->nullable();
            $table->foreign('treatment_card_id')->references('id')->on('treatment_cards');

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
        Schema::dropIfExists('treatment_plans');
    }
}
