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
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->enum('status', ['pending', 'processing', 'completed', 'canceled'])->default('pending');
            $table->date('date')->default(now());
            $table->integer('quantity');
            $table->double('unit_price');
            $table->double('total_price');
            $table->double('discount')->default(0);
            $table->double('per_item_discount')->default(0);
            $table->timestamps();
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
