<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('country_code_3');
            $table->string('country_code_2');
            $table->string('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
