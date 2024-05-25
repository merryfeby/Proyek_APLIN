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
        Schema::create('topup', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer');
            $table->string('method')->default('-');
            $table->integer('amount');
            $table->timestamp('transdate')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('status');
            $table->foreign('customer')->references('username')->on('user');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topup');
    }
};
