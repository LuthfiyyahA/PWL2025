<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // membuat tabel kegiatan
    // Tabel ini menyimpan informasi tentang kegiatan yang dilakukan oleh UKM
    public function up(): void
    {
        Schema::create('kegiatan_ukm', function (Blueprint $table) {
            $table->id('kegiatan_id');
            $table->unsignedBigInteger('ukm_id')->index();
            $table->string('nama_kegiatan', 100);
            $table->text('deskripsi_kegiatan')->nullable();
            $table->timestamps();

            // Foreign key ke tabel ukm
            $table->foreign('ukm_id')->references('ukm_id')->on('ukm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan_ukm');
    }
};
