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
        Schema::create('cliente_servicios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clientes_id')
                  ->constrained('clientes')
                  ->onDelete('cascade');
            $table->foreignId('servicios_id')
                  ->constrained('servicios')
                  ->onDelete('cascade');
            $table->decimal('monto', 10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_servicios');
    }
};
