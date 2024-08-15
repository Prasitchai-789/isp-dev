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
        Schema::create('Webapp_assets', function (Blueprint $table) {
            $table->id();
            $table->string('code_asset');
            $table->string('list_asset');
            $table->string('name_asset');
            $table->string('user_asset');
            $table->string('photo_asset');
            $table->string('category_asset');
            $table->string('status_asset')->nullable();
            $table->dateTime('buy_asset')->nullable();
            $table->string('remark_asset')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Webapp_assets');
    }
};
