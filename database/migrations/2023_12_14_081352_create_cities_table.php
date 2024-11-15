<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->integer('original_id');
            $table->string('name');
            $table->string('country_code_2');
            $table->string('country_code_3');
            $table->string('region_code');
            $table->string('region_name');
            $table->string('metro_code');
            $table->string('geoname');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
