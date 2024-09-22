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
        Schema::create('car_uses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('card_id');
            $table->string('car_id');
            $table->string('user_request');
            $table->string('use_job')->nullable();
            $table->string('use_start')->nullable();
            $table->string('use_end')->nullable();
            $table->string('use_distance')->nullable();
            $table->string('use_status')->nullable();
            $table->string('additionalNotes')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_uses');
    }
};
