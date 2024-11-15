<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('region_code');
            $table->string('key');
            $table->string('country_code_3');
            $table->string('country_code_2');
            $table->string('region_name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
