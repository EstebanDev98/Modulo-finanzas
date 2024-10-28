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
        Schema::create('estado_facturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facturas_id')
                  ->constrained('facturas')
                  ->onDelete('cascade');
            $table->enum('estado', ['pendiente', 'pagado', 'mora'])->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estado_facturas');
    }
};
