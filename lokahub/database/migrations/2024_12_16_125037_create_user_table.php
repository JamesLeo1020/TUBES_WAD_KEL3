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
        Schema::create('user', function (Blueprint $table) {
            $table->id(); // Primary key, auto increment
            $table->string('nama'); // Nama user
            $table->string('username')->unique(); // Username, harus unik
            $table->string('password'); // Password user
            $table->string('alamat'); // Alamat user
            $table->string('no_hp'); // Nomor HP
            $table->string('email')->unique(); // Email user, harus unik
            $table->timestamps(); // Kolom created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
