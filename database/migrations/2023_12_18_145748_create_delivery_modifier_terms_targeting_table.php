<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('delivery_modifier_term_targeting', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('delivery_modifier_term_id')->nullable(false);
            $table->string('key')->nullable(false);
            $table->string('value')->nullable();
            $table->string('comparator')->nullable(false);
            $table->boolean('expand_list')->nullable()->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('delivery_modifier_term_targeting');
    }
};
