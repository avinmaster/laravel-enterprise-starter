<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bid_modifiers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('advertiser_id')->nullable();
            $table->uuid('bid_model_id')->nullable();
            $table->string('name');
            $table->json('bid_modifier_terms')->nullable();
            $table->string('alternative_id')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('active')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bid_modifiers');
    }
};
