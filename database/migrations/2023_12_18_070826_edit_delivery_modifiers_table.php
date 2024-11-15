<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        $table = 'delivery_modifiers';
        if (Schema::hasColumns($table, ['delivery_modifier_terms', 'bid_model_id', 'modifier_type', 'default_delivery']
        )) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropColumn('delivery_modifier_terms');
                $table->dropColumn('bid_model_id');
                $table->dropColumn('modifier_type');
                $table->dropColumn('default_delivery');
            });
        }

        Schema::table($table, function (Blueprint $table) {
            $table->string('fallback_weight')->nullable(false)->change();
            $table->integer('fallback_budget_cap_percentage')->nullable()->after('name');
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::table('delivery_modifiers', function (Blueprint $table) {
            $table->dropColumn([
                'fallback_budget_cap_percentage',
                'deleted_at'
            ]);
            $table->integer('fallback_weight')->nullable()->change();
        });
    }
};
