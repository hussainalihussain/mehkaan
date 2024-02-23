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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['bar soap', 'liquid soap'])->default('bar soap');
            $table->double('weight');
            $table->enum('weight_unit', ['g', 'kg'])->default('g');
            $table->double('cost');
            $table->double('price');
            $table->double('selling_min_price');
            $table->double('selling_max_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
