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
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('country');
            $table->string('starting');
            $table->string('destination');
            $table->string('title');
            $table->float('price');
            $table->integer('duration');
            $table->integer('people');
            $table->boolean('round_trip');
            $table->integer('rating');
            $table->integer('reviews');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel');
    }
};
