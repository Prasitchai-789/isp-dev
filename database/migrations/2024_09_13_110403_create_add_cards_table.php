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
        Schema::create('add_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('card_number');
            $table->string('car_id');
            $table->string('additionalNotes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_cards');
    }
};
