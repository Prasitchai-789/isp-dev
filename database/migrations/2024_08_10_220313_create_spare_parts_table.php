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
        Schema::create('spare_parts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('id_machinery');
            $table->string('name_spare');
            $table->string('brand_spare');
            $table->string('type_spare')->nullable();
            $table->string('model_spare')->nullable();
            $table->string('number_spare')->nullable();
            $table->string('size_spare')->nullable();
            $table->string('lubricant')->nullable();
            $table->string('kw_spare')->nullable();
            $table->string('quantity_spare')->nullable();
            $table->string('status_spare')->nullable();
            $table->dateTime('plan_spare')->nullable();
            $table->string('breakdown_spare')->nullable();
            $table->string('remark_spare')->nullable();
            $table->string('photo_spare')->nullable();
            $table->dateTime('start_spare')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spare_parts');
    }
};
