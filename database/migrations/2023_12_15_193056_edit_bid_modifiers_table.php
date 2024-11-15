<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        $table = 'bid_modifiers';
        if (Schema::hasColumn($table, 'bid_modifier_terms')) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropColumn('bid_modifier_terms');
            });
        }

        Schema::table($table, function (Blueprint $table) {
            $table->boolean('active')->default(true)->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('bid_modifiers', function (Blueprint $table) {
        });
    }
};
