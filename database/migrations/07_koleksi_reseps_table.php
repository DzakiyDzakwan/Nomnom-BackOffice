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
        Schema::create('koleksi_reseps', function (Blueprint $table) {
            $table->bigInteger('koleksi_id')->unsigned();
            $table->bigInteger('resep_id')->unsigned();
            $table->foreign('koleksi_id')->references('id')->on('koleksis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('resep_id')->references('id')->on('reseps')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('added_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koleksi_reseps');
    }
};
