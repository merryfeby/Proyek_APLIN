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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('orderNumber');
            $table->unsignedInteger('screeningID');
            $table->unsignedInteger('offerID')->nullable();
            $table->string('customer');
            $table->string('employee');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('subtotal');
            $table->integer('grandtotal');
            $table->tinyInteger('status');
            $table->foreign('customer')->references('username')->on('user');
            $table->foreign('employee')->references('username')->on('employee');
            $table->foreign('screeningID')->references('id')->on('screening');
            $table->foreign('offerID')->references('id')->on('offers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
