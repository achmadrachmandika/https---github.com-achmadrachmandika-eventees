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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->unique();
            $table->string('kode_event', 100);
            $table->foreign('kode_event')->references('kode_event')->on('events')->onDelete('cascade');
            $table->string('order_id')->unique();
            $table->string('payment_type');
            $table->string('gross_amount');
            $table->string('transaction_status');
            $table->json('transaction_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
