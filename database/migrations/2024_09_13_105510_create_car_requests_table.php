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
        Schema::create('car_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_request');
            $table->string('job_request');
            $table->string('department_request')->nullable();
            $table->string('status_request')->nullable();
            $table->string('car_request')->nullable();
            $table->string('approver_request');
            $table->string('additionalNotes_request')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('car_requests');
    }
};
