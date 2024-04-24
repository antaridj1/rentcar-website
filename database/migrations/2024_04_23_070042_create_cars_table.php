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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('seat');
            $table->string('image');
            $table->integer('price');
            $table->boolean('is_with_driver')->default(false);
            $table->integer('price_with_driver')->nullable();
            $table->tinyInteger('is_available')->default(true);
            $table->tinyInteger('order_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
