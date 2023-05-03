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
        Schema::create('resep_utensills', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resep_id')->unsigned();
            $table->char('utensill_id');
            $table->foreign('resep_id')->references('id')->on('reseps')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('utensill_id')->references('id')->on('utensills')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep_utensills');
    }
};
