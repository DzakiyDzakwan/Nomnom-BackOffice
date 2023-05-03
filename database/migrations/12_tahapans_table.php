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
        Schema::create('tahapans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resep_id')->unsigned();
            $table->string('gambar');
            $table->integer('urutan');
            $table->text('deskripsi');
            $table->string('durasi');
            $table->foreign('resep_id')->references('id')->on('reseps')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahapans');
    }
};
