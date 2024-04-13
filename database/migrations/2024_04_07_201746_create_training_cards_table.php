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
        Schema::create('training_cards', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->unique();
            $table->string('descripcion');
            $table->string('imagen');
            $table->integer('n_repeticiones');
            $table->integer('n_series');
            $table->string('url_youtube');
            $table->enum('estado',['VISIBLE', 'NO VISIBLE']);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_cards');
    }
};
