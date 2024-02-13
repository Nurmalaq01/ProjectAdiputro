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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('warnas', function (Blueprint $table) {
            $table->id();
            $table->string('id_bus');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('perts', function (Blueprint $table) {
            $table->id();
            $table->string('id_warna');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
        Schema::dropIfExists('warnas');
        Schema::dropIfExists('perts');
    }
};
