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
        Schema::create('checkout_order', function (Blueprint $table) {
            $table->id('checkout_id');
            $table->string('customer_name');
            $table->integer('quantity');
            $table->integer('total amount');
            $table->string('address');
            $table->integer('contacts');


            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');

            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('customer_id')->on('customer')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout_order');
    }
};
