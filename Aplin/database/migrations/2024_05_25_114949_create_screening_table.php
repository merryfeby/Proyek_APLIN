<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('screening', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('movieID');
            $table->unsignedBigInteger('studioID');
            $table->dateTime('starttime');
            $table->foreign('movieID')->references('id')->on('movie');
            $table->foreign('studioID')->references('id')->on('studio');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('screening');
    }
};
