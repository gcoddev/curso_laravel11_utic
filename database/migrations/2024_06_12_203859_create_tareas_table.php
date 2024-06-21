<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id('id_tarea');
            $table->string('titulo', length: 50);
            $table->string('descripcion');
            $table->enum('estado', ['0', '1'])->default('1');
            $table->integer('id_usuario');
            $table->timestamp('creado_el')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('actualizado_el')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
