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
            $table->text('photo');
            $table->string('nama_event', 100);
            $table->json('benefits');
            $table->bigInteger('harga');
            $table->enum('status', ['Unpaid', 'Paid']);
            $table->date('tanggal',);
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
