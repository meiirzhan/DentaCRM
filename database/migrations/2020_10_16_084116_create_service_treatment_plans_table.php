<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTreatmentPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_treatment_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('level')->nullable();
            $table->unsignedInteger('quantity')->nullable();

            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services');
            $table->unsignedBigInteger('treatment_plan_id')->nullable();
            $table->foreign('treatment_plan_id')->references('id')->on('treatment_plans');
            $table->unsignedBigInteger('teeth_id')->nullable();
            $table->foreign('teeth_id')->references('id')->on('teeths');
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
        Schema::dropIfExists('service_treatment_plans');
    }
}
