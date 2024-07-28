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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // untuk judulnya
            $table->string('thumbnail'); // untuk gambarnya 
            $table->longText('content'); // untuk data paragraf penjelasannya
            $table->enum('post_as', ['JUMBOTRON1', 'JUMBOTRON2', 'JUMBOTRON3', 'JUMBOTRON4', 'ABOUT'])->nullable(); // Penanda
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
