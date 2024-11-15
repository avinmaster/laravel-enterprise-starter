<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('delivery_modifier_terms', function (Blueprint $table) {
            $table->renameColumn('bid_modifier_id', 'delivery_modifier_id');
        });
    }

    public function down(): void
    {
        Schema::table('delivery_modifier_terms', function (Blueprint $table) {
            $table->renameColumn('delivery_modifier_id', 'bid_modifier_id');
        });
    }
};
