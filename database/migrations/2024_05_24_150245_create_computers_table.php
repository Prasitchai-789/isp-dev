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
        Schema::create('Webapp_computers', function (Blueprint $table) {
            $table->id();
            $table->string('code_com')->unique();
            $table->string('cpu');
            $table->string('socket');
            $table->string('ram');
            $table->string('storage');
            $table->string('cd_rom');
            $table->string('graphice')->nullable();
            $table->string('mainboard');
            $table->string('model');
            $table->string('service_tag');
            $table->string('monitor')->nullable();
            $table->string('os')->nullable();
            $table->string('status')->nullable();
            $table->string('remark')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Webapp_computers');
    }
};
