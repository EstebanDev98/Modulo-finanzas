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
            Schema::create('servicios', function  (Blueprint $table) {
                $table->id('servicio_id');
                $table->string('nombre');
                $table->string('tipo');
                $table->float('tarifa_base')->nullable();
                $table->string('frecuencia');

                
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('servicios');
        }
    };
