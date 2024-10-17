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
        Schema::create('events', function (Blueprint $table) {
            $table->string('kode_event', 100)->primary();
            $table->string('kode_dosen', 100); // Add kode_dosen field
            $table->foreign('kode_dosen')->references('kode_dosen')->on('eventdosens')->onDelete('cascade');
            $table->text('photo');
            $table->string('nama_event', 100);
            $table->json('benefits');
            $table->bigInteger('harga');
            $table->enum('status', ['Unpaid', 'Paid']);
            $table->enum('kategori', ['Online', 'Offline']);
            $table->date('tanggal');
            $table->time('jam');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

