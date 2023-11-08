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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('tempat_layanan')->nullable();
            $table->string('lokasi_layanan')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('jam')->nullable();
            $table->string('keluhan')->nullable();
            $table->string('riwayat_penyakit')->nullable();
            $table->string('riwayat_pengobatan')->nullable();
            $table->string('riwayat_alergi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
