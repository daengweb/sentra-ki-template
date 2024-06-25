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
        Schema::create('patens', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nomor');
            $table->string('nama_inventor');
            $table->string('alamat_inventor');
            $table->string('nohp_inventor');
            $table->string('program_studi_inventor');
            $table->string('jurusan_inventor');
            $table->string('abstrak');
            $table->string('klaim');
            $table->boolean('status')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patens');
    }
};
