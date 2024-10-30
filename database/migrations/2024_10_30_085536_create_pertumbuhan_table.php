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
        Schema::create('pertumbuhan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('baby_id')->constrained('babies')->cascadeOnDelete();
            $table->date('tanggal');
            $table->double('berat_badan');
            $table->double('panjang_badan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertumbuhan');
    }
};
