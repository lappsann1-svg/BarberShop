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
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        
        // Menghubungkan ke tabel 'users'
        $table->foreignId('user_id')->constrained(); 
        
        // Menghubungkan ke tabel 'barbers'
        $table->foreignId('barber_id')->constrained(); 
        
        // Menghubungkan ke tabel 'services'
        $table->foreignId('service_id')->constrained(); 

        $table->dateTime('waktu_booking'); // Tanggal dan jam cukur
        $table->string('status')->default('pending'); // pending, success, atau canceled
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
