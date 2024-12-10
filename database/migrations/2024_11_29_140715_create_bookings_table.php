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
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // client qui réserve
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->date('date'); // date de la réservation
            $table->time('time'); // heure de la réservation
            $table->enum('type', ['full_price', 'deposit', 'not_set'])->default('not_set');
            $table->enum('status', ['read', 'confirmed', 'unread'])->default('unread');
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
