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
        Schema::create('car_repairs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('car_id');
            $table->string('car_issue');
            $table->string('car_plan');
            $table->string('car_canDrive');
            $table->dateTime('car_lastMaintenanceDate');
            $table->dateTime('car_preferredRepairDate');
            $table->string('car_garage')->nullable();
            $table->string('car_warrantyInfo')->nullable();
            $table->string('car_additionalNotes')->nullable();
            $table->string('car_requesterName');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_repairs');
    }
};
