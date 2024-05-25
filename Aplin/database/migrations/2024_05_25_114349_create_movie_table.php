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
        Schema::create('movie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->integer('duration');
            $table->string('cast', 255)->nullable();
            $table->string('producer', 255)->nullable();
            $table->string('director', 255)->nullable();
            $table->string('poster', 255)->nullable();
            $table->string('genre', 225)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('synopsis', 255)->nullable();
            $table->tinyInteger('license')->default(0);
            $table->dateTime('licensed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
