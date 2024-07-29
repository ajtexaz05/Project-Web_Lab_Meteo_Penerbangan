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
        Schema::create('petas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('thumbnail');
            $table->longText('content');
            $table->enum('post_as', ['AWAN_CB', 'PRAKIRAAN_AREA_00_UTC', 'CLOUD_TYPE', 'MEDIUM_LEVEL_SIGWX', 'HIGH_LEVEL_SIGWX', 'WIND'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petas');
    }
};
