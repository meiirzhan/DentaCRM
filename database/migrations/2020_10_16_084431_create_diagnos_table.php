<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('diagnoses')->nullable();

            $table->unsignedBigInteger('treatment_card_id')->nullable();
            $table->foreign('treatment_card_id')->references('id')->on('treatment_cards');
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
        Schema::dropIfExists('diagnos');
    }
}
