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
        Schema::create('report_cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('number_car');
            $table->string('county_car');
            $table->string('type_car');
            $table->string('character_car');
            $table->string('brand_car');
            $table->string('model_car')->nullable();
            $table->string('year_car')->nullable();
            $table->string('color_car')->nullable();
            $table->string('fuel_car')->nullable();
            $table->string('mileage_car')->nullable();
            $table->dateTime('date_car')->nullable();
            $table->dateTime('buy_car')->nullable();
            $table->dateTime('tax_car')->nullable();
            $table->dateTime(' insurance_car')->nullable();
            $table->string('photo_car')->nullable();
            $table->string('status_car')->nullable();
            $table->string('details_car')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_cars');
    }
};
