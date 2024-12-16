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
        Schema::create('rating', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // Relasi ke tabel user
            $table->unsignedBigInteger('produk_id'); // Relasi ke tabel produk
            $table->text('ulasan'); // Ulasan produk
            $table->timestamps(); // created_at & updated_at

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('produk_id')->references('id')->on('produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating');
    }
};
