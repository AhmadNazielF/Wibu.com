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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->string('judul_alternatif')->nullable();
            $table->string('genre')->nullable();
            $table->string('status')->nullable();
            $table->string('ratings')->nullable();
            $table->integer('jumlah_episode')->nullable();
            $table->string('studio')->nullable();
            $table->integer('tahun_tayang')->nullable();
            $table->string('sinopsis')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
