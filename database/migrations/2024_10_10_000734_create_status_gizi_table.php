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
        Schema::create('status_gizi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('obsteri_id')->constrained('obsteri')->cascadeOnDelete();
            $table->double('tinggi_badan');
            $table->double('bb_sebelum_hamil');
            $table->double('bb_saat_hamil');
            $table->double('bb_setelah_melahirkan');
            $table->string('aktifitas_harian');
            $table->double('imt_pra_hamil');
            $table->double('imt_post_hamil');
            $table->double('resistensi_bb');
            $table->double('kebutuhan_kalori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_gizi');
    }
};
