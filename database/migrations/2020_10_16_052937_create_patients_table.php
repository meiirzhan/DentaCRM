<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('individual_id_number')->unique()->nullable();
            $table->string('fullname')->nullable();
            $table->text('phones')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('address')->nullable();
            $table->date('birthday')->nullable();
            $table->string('organization')->nullable();
            $table->string('price_list')->nullable();
            $table->string('bonus_type')->nullable();
            $table->string('source')->nullable();
            $table->string('category')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
