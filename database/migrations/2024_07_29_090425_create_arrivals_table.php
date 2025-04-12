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
        Schema::create('arrivals', function (Blueprint $table) {
            $table->id();
            $table->string('airline_iata',4)->nullable()->default('null');
            $table->string('flight_iata')->nullable()->default('null');
            // $table->string('carrier')->nullable()->default('null');
            $table->string('arrival',4)->nullable()->default('null');
            $table->string('arr_time')->nullable()->default('null');
            $table->string('departure',4)->nullable()->default('null');
            $table->string('dep_time')->nullable()->default('null');
            $table->string('status')->nullable()->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arrivals');
    }
};
