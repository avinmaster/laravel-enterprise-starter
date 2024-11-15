<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bid_modifier_terms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('bid_modifier_id')->nullable(false);
            $table->integer('recency_start')->nullable();
            $table->integer('recency_end')->nullable();
            $table->string('comparator')->nullable(false);
            $table->string('multiplier')->nullable(false);
            $table->boolean('override_multiplier')->nullable();
            $table->string('targeting_key')->nullable(false);
            $table->string('value')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bid_modifier_terms');
    }
};
