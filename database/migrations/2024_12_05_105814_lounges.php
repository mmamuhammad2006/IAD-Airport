<?php

use Carbon\Carbon;
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
        Schema::create('lounges',  function (Blueprint $table) {
            $table->id();
            $table->string('airport_id', 64)->charset('utf8');
            $table->string('category_id', 64)->charset('utf8');
            $table->string('slug', 255)->nullable()->charset('utf8');
            $table->string('name', 255)->charset('utf8');
            $table->string('_id', 64)->charset('utf8');
            $table->string('latitude', 64)->charset('utf8');
            $table->string('longitude', 64)->charset('utf8');
            $table->string('distance_text', 64)->nullable()->charset('utf8');
            $table->double('distance_value', 8, 2)->nullable();
            $table->json('all_travel_mode_distance')->nullable();
            $table->string('google_place_id', 64)->nullable()->charset('utf8');
            $table->string('dup_google_place_id', 64)->nullable()->charset('utf8');
            $table->string('google_latitude', 64)->nullable()->charset('utf8');
            $table->string('google_longitude', 64)->nullable()->charset('utf8');
            $table->string('google_rating', 64)->nullable()->charset('utf8');
            $table->string('google_formatted_address', 255)->nullable()->charset('utf8');
            $table->json('data');
            $table->json('google_data')->nullable();
            $table->timestamp('expire_at')->default(Carbon::now()->addYear());
            $table->timestamps();

            $table->unique(['_id', 'airport_id', 'category_id'], 'places__id_airport_id_category_id_unique');
            $table->unique(['google_place_id', 'airport_id', 'category_id'], 'places_google_place_id_airport_id_category_id_unique');
            $table->unique('slug', 'places_slug_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lounges');
    }
};
