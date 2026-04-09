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
        $table->string('transaction_id')->unique(); // Untuk nomor struk (Contoh: BRB-100424001)
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('barber_id')->constrained()->onDelete('cascade');
        $table->foreignId('service_id')->constrained()->onDelete('cascade');
        $table->integer('total_price'); // Harga saat booking dilakukan
        $table->dateTime('waktu_booking');
        $table->enum('payment_status', ['unpaid', 'paid'])->default('unpaid'); // Status bayar
        $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');
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
