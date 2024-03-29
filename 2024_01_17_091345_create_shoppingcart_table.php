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
        Schema::create('shoppingcart', function (Blueprint $table) {
            $table->id();
            $table->string('Product_Name');
            $table->string('variation')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('quantity')->default(1);
            $table->decimal('amount', 8, 2)->default(0.00);
            $table->string('Total_amount', 8, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoppingcart');
    }
};
