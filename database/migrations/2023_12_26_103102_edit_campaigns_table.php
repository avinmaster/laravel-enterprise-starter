<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->renameColumn('set_campaign_preset', 'campaign_preset');
            $table->renameColumn('set_line_item_preset', 'default_line_item_preset');
            $table->boolean('active')->default(false)->change();
            $table->dropColumn('budget');
            $table->dropColumn('daily_budget');
            $table->integer('impressions_budget_daily')->nullable()->after('budget_type');
            $table->integer('impressions_budget_lifetime')->nullable()->after('budget_type');
            $table->decimal('spend_budget_daily', 20)->nullable()->after('budget_type');
            $table->decimal('spend_budget_lifetime', 20)->nullable()->after('budget_type');
            $table->dropColumn('frequency_cap_duration');
            $table->dropColumn('frequency_cap_impressions');
            $table->dropColumn('frequency_cap_vendor');
            $table->renameColumn('frequency_cap_type', 'frequency_caps_id_type');
            $table->string('ghost_bidding_id_vendor_id')->nullable()->after('revenue_amount');
            $table->string('ghost_bidding_id_vendor')->nullable()->after('revenue_amount');
            $table->string('ghost_bidding_id_type')->nullable()->after('revenue_amount');
            $table->json('event_ids')->nullable()->after('revenue_amount');
            $table->renameColumn('segment_extension_type', 'segment_type');
            $table->renameColumn('segment_extension_vendors', 'segment_vendors');
            $table->dropColumn('experiments');
        });

        Schema::table('campaigns', function (Blueprint $table) {
            $table->string('frequency_caps_id_vendor_id')->nullable()->after('frequency_caps_id_type');
            $table->string('frequency_caps_id_vendor')->nullable()->after('frequency_caps_id_type');
            $table->json('frequency_caps_limits')->nullable()->after('frequency_caps_id_type');
            $table->boolean('frequency_caps_use_fallback')->nullable()->after('frequency_caps_id_type');
            $table->string('frequency_caps_id_type')->nullable()->default(null)->change();
            $table->renameColumn('segment_extension', 'segment_extension_type');
        });
    }

    public function down(): void
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->renameColumn('campaign_preset', 'set_campaign_preset');
            $table->renameColumn('default_line_item_preset', 'set_line_item_preset');
            $table->boolean('active')->change();
            $table->decimal('daily_budget')->nullable()->after('budget_type');
            $table->decimal('budget')->nullable()->after('budget_type');
            $table->dropColumn('spend_budget_lifetime');
            $table->dropColumn('spend_budget_daily');
            $table->dropColumn('impressions_budget_lifetime');
            $table->dropColumn('impressions_budget_daily');
            $table->dropColumn('frequency_caps_limits');
            $table->dropColumn('frequency_caps_use_fallback');
            $table->dropColumn('frequency_caps_id_vendor_id');
            $table->dropColumn('frequency_caps_id_vendor');
            $table->renameColumn('frequency_caps_id_type', 'frequency_cap_type');
            $table->dropColumn('event_ids');
            $table->dropColumn('ghost_bidding_id_type');
            $table->dropColumn('ghost_bidding_id_vendor');
            $table->dropColumn('ghost_bidding_id_vendor_id');
            $table->renameColumn('segment_extension_type', 'segment_extension');
            $table->boolean('experiments')->nullable()->default(false)->after('custom_event_association');
        });

        Schema::table('campaigns', function (Blueprint $table) {
            $table->string('frequency_cap_vendor')->nullable()->after('frequency_cap_type');
            $table->integer('frequency_cap_impressions')->nullable()->after('frequency_cap_type');
            $table->integer('frequency_cap_duration')->nullable()->after('frequency_cap_type');
            $table->renameColumn('segment_type', 'segment_extension_type');
            $table->renameColumn('segment_vendors', 'segment_extension_vendors');
        });
    }
};
