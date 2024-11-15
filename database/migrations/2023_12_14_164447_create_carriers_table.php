<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('carriers', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->nullable()->default(false);
            $table->string('key')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('category')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carriers');
    }
};
