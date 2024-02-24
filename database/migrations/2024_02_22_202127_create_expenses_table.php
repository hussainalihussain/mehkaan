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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['initial factory cost', 'one time cost', 'daily', 'weekly', 'monthly', 'quarterly', 'half yearly', 'yearly'])->default('one time cost');
            $table->string('name');
            $table->text('description');
            $table->date('date');
            $table->enum('payment_method', ['cash', 'jazz cash', 'easy paisa', 'bank'])->default('cash');
            $table->string('paid_by_name');
            $table->float('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
