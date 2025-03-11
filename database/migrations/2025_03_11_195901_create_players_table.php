<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();  // ID único para cada jugador
            $table->string('name');  // Nombre del jugador
            $table->string('position');  // Posición del jugador
            $table->integer('age');  // Edad del jugador
            $table->timestamps();  // Timestamps de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};
