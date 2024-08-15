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
        Schema::create('machineries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_machinery');
            $table->string('number_machinery');
            $table->string('register_machinery');
            $table->string('job_machinery')->nullable();
            $table->string('agency_machinery')->nullable();
            $table->string('type')->nullable();
            $table->string('status_machinery')->nullable();
            $table->date('plan_machinery')->nullable();
            $table->string('breakdown_machinery')->nullable();
            $table->string('remark_machinery')->nullable();
            $table->string('photo_machinery')->nullable();
            $table->date('start_machinery')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machineries');
    }
};
