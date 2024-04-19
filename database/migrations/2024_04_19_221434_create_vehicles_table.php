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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('stock_id', 50);
            $table->string('make', 40);
            $table->string('model', 100);
            $table->integer('year');
            $table->integer('fob');
            $table->string('currency', 1);
            $table->integer('mileage');
            $table->string('engine', 20);
            $table->string('doors');
            $table->string('transmission', 10);
            $table->string('type', 10);
            $table->string('fuel', 10);
            $table->string('category', 10);
            $table->text('extras');
            $table->string('buy_link', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
