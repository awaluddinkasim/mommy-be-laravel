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
        Schema::create('laktasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('baby_id')->constrained('babies')->cascadeOnDelete();
            $table->timestamp('mulai');
            $table->timestamp('selesai');
            $table->enum('posisi', ['Kiri', 'Kanan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laktasi');
    }
};