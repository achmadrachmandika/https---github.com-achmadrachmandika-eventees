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
        Schema::create('event_dosens', function (Blueprint $table) {
            $table->string('kode_evndsn', 100)->primary();
            $table->text('photo');
            $table->string('nama_event', 100);
            $table->json('benefits');
            $table->integer('kuota');
            $table->enum('kategori', ['Online', 'Offline']);
            $table->date('tanggal');
            $table->time('jam_mulai');  // Menambahkan kolom jam_mulai
            $table->time('jam_pulang'); 
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_dosens');
    }
};
