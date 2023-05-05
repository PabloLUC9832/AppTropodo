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
        Schema::create('artropodos', function (Blueprint $table) {
            $table->id();
            $table->text('nombre_comun');
            $table->text('nombre_cientifico');
            $table->text('clasificacion');
            $table->text('habitat');
            $table->text('distribucion_geografica');
            $table->text('color');
            $table->text('peligroso');
            $table->text('patas');
            $table->text('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artropodos');
    }
};
