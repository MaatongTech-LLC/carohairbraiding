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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->enum('type', ['women', 'men', 'kids', 'any'])->default('any');
            $table->time('duration')->default("1:00");
            $table->string('image');
            $table->decimal('deposit_price', 8, 2)->default(20);
            $table->decimal('price', 8, 2);
            $table->enum('tag', ['auto', 'set'])->default('set');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
