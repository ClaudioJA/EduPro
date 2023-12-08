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
        Schema::create('vblDetails', function (Blueprint $table) {
            $table->id();
            $table->string('headerId');
            $table->string('title');
            $table->bigInteger('chapter');
            $table->string('videoUrl');
            $table->string('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vblDetails');
    }
};
