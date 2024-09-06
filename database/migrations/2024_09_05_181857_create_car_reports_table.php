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
        Schema::create('car_reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('car_number');
            $table->string('car_county');
            $table->string('car_type');
            $table->string('car_character');
            $table->string('car_brand');
            $table->string('car_model')->nullable();
            $table->string('car_year')->nullable();
            $table->string('car_color')->nullable();
            $table->string('car_fuel')->nullable();
            $table->string('car_mileage')->nullable();
            $table->dateTime('car_date')->nullable();
            $table->dateTime('car_buy')->nullable();
            $table->dateTime('car_tax')->nullable();
            $table->dateTime('car_insurance')->nullable();
            $table->string('car_photo')->nullable();
            $table->string('car_status')->nullable();
            $table->string('car_details')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_reports');
    }
};
