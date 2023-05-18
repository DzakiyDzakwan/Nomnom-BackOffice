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
        Schema::create('ratings', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->bigInteger('resep_id')->unsigned();
            $table->integer('rate')->unsigned();
            $table->foreign('user_id')->references('uuid')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('resep_id')->references('id')->on('reseps')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('added_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
