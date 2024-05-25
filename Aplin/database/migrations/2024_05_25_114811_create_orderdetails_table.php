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
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->unsignedBigInteger('orderNumber');
            $table->unsignedBigInteger('seatID');
            $table->integer('price');
            $table->primary(['orderNumber', 'seatID']);
            $table->foreign('orderNumber')->references('orderNumber')->on('orders');
            $table->foreign('seatID')->references('id')->on('seats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderdetails');
    }
};
