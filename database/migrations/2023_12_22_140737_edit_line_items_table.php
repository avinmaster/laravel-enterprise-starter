<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('line_items', function (Blueprint $table) {
            $table->dropColumn('bid_shading');
            $table->dropColumn('start_date');
            $table->dropColumn('daily_budget');
            $table->dropColumn('budget');
            $table->dropColumn('targeting_template_id');
            $table->dropColumn('frequency_cap_duration');
            $table->dropColumn('frequency_cap_impressions');
            $table->dropColumn('frequency_cap_vendor');
            $table->dropColumn('creative_weighting_method');
            $table->dropColumn('segment_extension_default');
            $table->dropColumn('segment_extension_type_default');
            $table->dropColumn('segment_extension_vendors_default');
            $table->integer('type')->default(null)->change();
            $table->integer('budget_type')->nullable()->default(null)->change();
            $table->string('bidding_strategy_pacing')->nullable()->default(null)->change();
            $table->string('bid_shading_win_rate_control')->nullable()->default(null)->change();
            $table->string('skad_assignment_level')->nullable()->default(null)->change();
            $table->renameColumn('frequency_cap_type', 'frequency_caps_id_type');
        });

        Schema::table('line_items', function (Blueprint $table) {
            $table->renameColumn('bidding_strategy_values', 'bidding_values');
            $table->renameColumn('bid_shading_win_rate_control', 'bid_shading_control');
            $table->renameColumn('bidding_strategy_is_custom', 'bidding_custom');
            $table->renameColumn('bidding_strategy_pacing', 'bidding_pacing');
            $table->date('start_date')->nullable()->after('type');
            $table->decimal('min_bid', 20)->nullable()->after('delivery_modifier_id');
            $table->string('currency')->nullable()->after('notes');
            $table->integer('impressions_budget_daily')->nullable()->after('budget_type');
            $table->integer('impressions_budget_lifetime')->nullable()->after('budget_type');
            $table->decimal('spend_budget_daily', 20)->nullable()->after('budget_type');
            $table->decimal('spend_budget_lifetime', 20)->nullable()->after('budget_type');
            $table->string('budget_carry_over_type')->nullable()->after('user_timezones');
            $table->string('frequency_caps_id_type')->nullable()->default(null)->change();
            $table->string('frequency_caps_id_vendor_id')->nullable()->after('frequency_caps_id_type');
            $table->string('frequency_caps_id_vendor')->nullable()->after('frequency_caps_id_type');
            $table->json('frequency_caps_limits')->nullable()->after('frequency_caps_id_type');
            $table->boolean('frequency_caps_use_fallback')->nullable()->after('frequency_caps_id_type');
            $table->string('ghost_bidding_id_vendor_id')->nullable()->after('user_timezones');
            $table->string('ghost_bidding_id_vendor')->nullable()->after('user_timezones');
            $table->string('ghost_bidding_id_type')->nullable()->after('user_timezones');
            $table->json('event_ids')->nullable()->after('user_timezones');
            $table->json('segment_vendors')->nullable()->after('user_timezones');
            $table->string('segment_type')->nullable()->after('user_timezones');
            $table->string('segment_extension_type')->nullable()->after('user_timezones');
        });
    }

    public function down(): void
    {
        Schema::table('line_items', function (Blueprint $table) {
            $table->dropColumn('start_date');
            $table->dropColumn('min_bid');
            $table->dropColumn('currency');
            $table->dropColumn('spend_budget_lifetime');
            $table->dropColumn('spend_budget_daily');
            $table->dropColumn('impressions_budget_lifetime');
            $table->dropColumn('impressions_budget_daily');
            $table->dropColumn('frequency_caps_limits');
            $table->dropColumn('frequency_caps_use_fallback');
            $table->dropColumn('budget_carry_over_type');
            $table->dropColumn('ghost_bidding_id_type');
            $table->dropColumn('ghost_bidding_id_vendor');
            $table->dropColumn('ghost_bidding_id_vendor_id');
            $table->dropColumn('event_ids');
            $table->dropColumn('frequency_caps_id_vendor_id');
            $table->dropColumn('frequency_caps_id_vendor');
            $table->dropColumn('segment_extension_type');
            $table->dropColumn('segment_type');
            $table->dropColumn('segment_vendors');
            $table->renameColumn('frequency_caps_id_type', 'frequency_cap_type');
        });

        Schema::table('line_items', function (Blueprint $table) {
            $table->renameColumn('bidding_values', 'bidding_strategy_values');
            $table->renameColumn('bid_shading_control', 'bid_shading_win_rate_control');
            $table->renameColumn('bidding_custom', 'bidding_strategy_is_custom');
            $table->renameColumn('bidding_pacing', 'bidding_strategy_pacing');
            $table->boolean('bid_shading')->nullable()->default(false)->after('bidding_strategy');
            $table->uuid('targeting_template_id')->nullable()->after('type');
            $table->date('start_date')->nullable()->after('type');
            $table->decimal('daily_budget', 20)->nullable()->after('budget_type');
            $table->decimal('budget', 20)->after('budget_type');
            $table->string('frequency_cap_type')->nullable()->default(null)->change();
            $table->string('frequency_cap_vendor')->nullable()->after('frequency_cap_type');
            $table->integer('frequency_cap_impressions')->nullable()->after('frequency_cap_type');
            $table->integer('frequency_cap_duration')->nullable()->after('frequency_cap_type');
            $table->string('creative_weighting_method')->nullable()->after('user_timezones');
            $table->json('segment_extension_vendors_default')->nullable()->after('user_timezones');
            $table->string('segment_extension_type_default')->nullable()->after('user_timezones');
            $table->string('segment_extension_default')->nullable()->after('user_timezones');
        });
    }
};
