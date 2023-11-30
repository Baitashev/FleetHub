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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_id');
            $table->string('driver_id')->unique();
            $table->string('start_time');
            $table->string('end_time'); // Номер телефона водителя
            $table->string('start_location'); // Номер автомобиля водителя
            $table->string('end_location');
            $table->string('distance');
            $table->string('client_id');
            $table->string('trip_cost');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('имя_таблицы');
    }
};
