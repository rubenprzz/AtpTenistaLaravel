<?php

use App\Mano;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tenistas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ranking');
            $table->string('nombre');
            $table->string('pais');
            $table->date('fechaNacimiento');
            $table->bigInteger('edad');
            $table->double('altura');
            $table->double('peso');
            $table->date('profesionalDesde');
            $table->enum('mano', ['DIESTRO', 'ZURDO']);
            $table->enum('reves', ['UNA_MANO', 'DOS_MANOS']);
            $table->enum('modo', ['INDIVIDUAL', 'DOBLE', 'INDIVIDUAL_DOBLE']);
            $table->string('entrenador');
            $table->bigInteger('dineroGanado');
            $table->bigInteger('bestRanking');
            $table->double('wins');
            $table->double('loses');
            $table->double('winrate');
            $table->string('imagen');
            $table->boolean('isDeleted')->default(false);
            $table->foreignId('torneo_idSecundario');



            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenistas');
    }
};