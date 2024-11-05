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
            $table->unsignedBigInteger('idcliente');
            $table->unsignedBigInteger('idservicio');
            $table->integer('idtiposervicio');
            $table->float('monto');
            $table->string('fecha-hora');
            $table->timestamps();
            $table->foreign('idcliente')->references('id')->on('users');
            $table->foreign('idservicio')->references('id')->on('servicios');
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
