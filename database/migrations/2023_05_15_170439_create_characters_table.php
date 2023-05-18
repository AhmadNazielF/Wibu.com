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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->string('role')->nullable();
            $table->integer('umur')->nullable();
            $table->string('status')->nullable();
            $table->string('gender')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('deskripsi')->nullable();;
            $table->string('penampilan')->nullable();
            $table->string('sejarah')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('anime_id');
            $table->integer('click');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
