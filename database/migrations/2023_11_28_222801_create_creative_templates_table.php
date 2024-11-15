<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('creative_templates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->integer('creative_type');
            $table->boolean('is_video')->nullable();
            $table->boolean('active')->nullable()->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('creative_templates');
    }
};
