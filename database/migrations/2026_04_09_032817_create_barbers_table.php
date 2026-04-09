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
    Schema::create('barbers', function (Blueprint $table) {
        $table->id(); // ID otomatis (Primary Key)
        $table->string('nama'); // Nama tukang cukur
        $table->string('spesialisasi')->nullable(); // Boleh kosong
        $table->boolean('is_ready')->default(true); // Status apakah sedang ada pelanggan?
        $table->timestamps(); // Kolom created_at & updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barbers');
    }
};
