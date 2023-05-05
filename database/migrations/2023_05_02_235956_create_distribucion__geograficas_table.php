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
        Schema::create('distribucion__geograficas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artropodo_id');
            $table->text('distribucion_geografica')->nullable();
            $table->timestamps();

            $table->foreign('artropodo_id')->references('id')->on('artropodos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distribucion__geograficas');
    }
};
