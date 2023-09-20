<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('placa'); // Cadena para la Placa
            $table->string('marca'); // Cadena para la Marca
            $table->string('modelo'); // Cadena para el Modelo
            $table->integer('numero_de_puertas'); // Entero para el Número de puertas
            $table->string('tipo_de_vehiculo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
