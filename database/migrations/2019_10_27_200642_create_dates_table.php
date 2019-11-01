<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('season');
            $table->unsignedBigInteger('day_id');
            $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade');
            $table->unsignedBigInteger('al_dors_id');
            $table->foreign('al_dors_id')->references('id')->on('al_dors')->onDelete('cascade');
            $table->unsignedBigInteger('stars_id');
            $table->foreign('stars_id')->references('id')->on('stars')->onDelete('cascade');
            $table->unsignedBigInteger('al_talas_id');
            $table->foreign('al_talas_id')->references('id')->on('al_talas')->onDelete('cascade');
            $table->unsignedBigInteger('al_fajrs_id');
            $table->foreign('al_fajrs_id')->references('id')->on('al_fajrs')->onDelete('cascade');
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
        Schema::dropIfExists('dates');
    }
}
