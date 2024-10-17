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
        Schema::create('eventreqdosens', function (Blueprint $table) {
            $table->string('kode_dosen', 100)->primary();
            $table->text('training_topic')->nullable();
            $table->string('no_hp');
            $table->string('nama_dosen');
            $table->enum('status', ['Proses', 'Terealisasi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventreqdosens');
    }
};

