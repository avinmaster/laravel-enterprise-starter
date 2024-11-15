<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('targeting_expression_modules', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('targeting_expression_id');
            $table->string('module');
            $table->string('key');
            $table->string('operator');
            $table->string('comparator');
            $table->string('value');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('targeting_expression_modules');
    }
};
