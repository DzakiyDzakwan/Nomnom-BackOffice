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
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->string('nama_resep');
            $table->text('deskripsi');
            $table->string('durasi');
            $table->integer('porsi');
            $table->enum('kesulitan', ['mudah', 'sulit']);
            $table->string('kalori');
            $table->string('lemak');
            $table->string('karbohidrat');
            $table->foreign('user_id')->references('uuid')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
