<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('operating_system_versions', function (Blueprint $table) {
            $table->id();
            $table->string('operating_system_key')->nullable(false);
            $table->boolean('active')->nullable()->default(false);
            $table->string('key')->nullable(false);
            $table->string('name')->nullable(false);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('operating_system_versions');
    }
};
