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
        Schema::create('cart', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // Relasi ke tabel user
            $table->unsignedBigInteger('produk_id'); // Relasi ke tabel produk
            $table->integer('produk_jumlah'); // Jumlah produk dalam cart
            $table->integer('produk_harga'); // Harga produk dalam cart
            $table->unsignedBigInteger('voucher_id')->nullable(); // Relasi ke tabel voucher
            $table->timestamps(); // created_at & updated_at

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('produk_id')->references('id')->on('produk');
            $table->foreign('voucher_id')->references('id')->on('voucher');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
