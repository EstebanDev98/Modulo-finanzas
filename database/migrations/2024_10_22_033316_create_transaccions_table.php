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
        Schema::create('transaccions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('factura_id')
                  ->constrained('facturas')
                  ->onDelete('cascade');
            $table->decimal('monto_pagado', 10,2);
            $table->decimal('saldo_pendiente', 10,2);
            $table->enum('estado', ['pendiente', 'pagado', 'mora'])->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaccions');
    }
};
