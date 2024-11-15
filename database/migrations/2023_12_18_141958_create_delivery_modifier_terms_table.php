<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('delivery_modifier_terms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('bid_modifier_id')->nullable(false);
            $table->integer('budget_cap_percentage')->nullable();
            $table->integer('rank')->nullable(false);
            $table->string('weight')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('delivery_modifier_terms');
    }
};
