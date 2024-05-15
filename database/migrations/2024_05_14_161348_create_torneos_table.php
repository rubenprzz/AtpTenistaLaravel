<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('torneos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->bigIncrements('idSecundario')->unique();
            $table->string('nombre');
            $table->string('ubicacion');
            $table->enum('modo', ['INDIVIDUAL', 'DOBLES', 'INDIVIDUAL_DOBLE']);
            $table->enum('categoria', ['ATP_250', 'ATP_500', 'MASTERS_1000']);
            $table->enum('superficie', ['HIERBA','ARCILLA', 'DURA']);
            $table->integer('entradas');
            $table->integer('premio');
            $table->integer('puntos');
            $table->date('fechaInicio');
            $table->date('fechaFinalizacion');
            $table->string('imagen');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneos');
    }
};
