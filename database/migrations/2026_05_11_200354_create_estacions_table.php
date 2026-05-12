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
    Schema::create('estaciones', function (Blueprint $table) {

        $table->id();

        $table->string('nombre');
        $table->string('municipio')->nullable();

        $table->decimal('latitud', 10, 7);
        $table->decimal('longitud', 10, 7);

        $table->decimal('temperatura', 5, 2)->nullable();
        $table->decimal('humedad', 5, 2)->nullable();

        $table->boolean('activa')->default(true);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estacions');
    }
};
