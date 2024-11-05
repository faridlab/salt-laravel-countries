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
        Schema::table('subdistricts', function (Blueprint $table) {
            $table->after('district_id', function ($table) {
                $table->foreignUuid('country_id')->references('id')->on('countries');
                $table->foreignUuid('province_id')->references('id')->on('provinces');
                $table->foreignUuid('city_id')->references('id')->on('cities');
                $table->float('latitude')->nullable();
                $table->float('longitude')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
