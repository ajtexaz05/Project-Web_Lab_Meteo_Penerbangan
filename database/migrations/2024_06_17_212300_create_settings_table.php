<?php

use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        // Lokasi
        setting::create([
            'key' => '_lokasi',
            'label' => 'Lokasi',
            'value' => 'Tanah Tinggi, Tanggerang, STMKG',
            'type' => 'text',
        ]);

        // Waktu
        setting::create([
            'key' => '_waktu',
            'label' => 'Waktu',
            'value' => '07:00',
            'type' => 'text',
        ]);

        // Kalender
        setting::create([
            'key' => '_kalender',
            'label' => 'Kalender',
            'value' => '17 - 06 - 2024',
            'type' => 'text',
        ]);

        // Wind Speed
        setting::create([
            'key' => '_wind_speed',
            'label' => 'Wind Speed',
            'value' => '5 Knots',
            'type' => 'text',
        ]);

        // Wind Direction
        setting::create([
            'key' => '_wind_direction',
            'label' => 'Wind Direction',
            'value' => '150 Derajat',
            'type' => 'text',
        ]);

        // Humidity
        setting::create([
            'key' => '_humidity',
            'label' => 'Humidity',
            'value' => '60% - 90%',
            'type' => 'text',
        ]);

        // Min. Temperature
        setting::create([
            'key' => '_min_temperature',
            'label' => 'Min Temperature',
            'value' => '25 Derajat Celcius',
            'type' => 'text',
        ]);

        // Temperature
        setting::create([
            'key' => '_temperature',
            'label' => 'Temperature',
            'value' => '25 - 33 Derajat Celcius',
            'type' => 'text',
        ]);

        // Max. Temperature
        setting::create([
            'key' => '_max_temperature',
            'label' => 'Max Temperature',
            'value' => '33 Derajat Celcius',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
