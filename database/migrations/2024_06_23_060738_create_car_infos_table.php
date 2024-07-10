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
        Schema::create('car_infos', function (Blueprint $table) {
            $table->id('car_infos_id');
            $table->string('name')->nullable();
            $table->string('Doors')->nullable();
            $table->string('Passengers')->nullable();
            $table->string('Transmission')->nullable();
            $table->string('Luggage')->nullable();
            $table->string('AirCondition')->nullable();
            $table->string('Age')->nullable();
            $table->text('generalinfo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_infos');
    }
};
