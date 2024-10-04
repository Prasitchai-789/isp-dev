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
        Schema::create('pass_cards', function (Blueprint $table) {
            $table->id();
            $table->string('prefix');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('id_card')->unique();
            $table->string('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('address_moo')->nullable();
            $table->string('district')->nullable();
            $table->string('county')->nullable();
            $table->string('province')->nullable();
            $table->string('car_number')->nullable();
            $table->string('pass_status')->nullable();
            $table->string('pass_dept')->nullable();
            $table->string('pass_contact')->nullable();
            $table->string('pass_remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pass_cards');
    }
};
