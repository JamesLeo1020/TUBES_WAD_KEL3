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
        Schema::create('about', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->text('about'); // Informasi tentang platform
            $table->string('contact_email'); // Email kontak
            $table->string('contact_phone'); // Nomor telepon kontak
            $table->string('contact_address'); // Alamat kontak
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
