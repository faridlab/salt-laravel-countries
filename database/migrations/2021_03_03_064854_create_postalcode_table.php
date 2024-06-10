<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postalcode', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('subdistrict_id')->nullable()->references('id')->on('subdistricts');
            $table->foreignUuid('district_id')->nullable()->references('id')->on('districts');
            $table->foreignUuid('city_id')->nullable()->references('id')->on('cities');
            $table->foreignUuid('province_id')->references('id')->on('provinces');
            $table->foreignUuid('country_id')->references('id')->on('countries');
            $table->string('postal_code', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postalcode');
    }
};
