<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->dropColumn([
                'set_campaign_present',
                'set_line_item_present',
                'default_targeting_present',
                'custom_event_association',
                'experiments',
                'budget_type',
                'extension_vendor',
                'segment_vendor',
                'bid_modifier',
                'max_bid',
                'min_bid',
                'delivery_modifier',
                'external_id',
            ]);
        });

        Schema::table('campaigns', function (Blueprint $table) {
            $table->uuid('set_campaign_preset')->nullable()->after('name');
            $table->uuid('set_line_item_preset')->nullable()->after('set_campaign_preset');
            $table->uuid('default_targeting_preset')->nullable()->after('set_line_item_preset');
            $table->boolean('custom_event_association')->nullable()->default(false)->after('default_targeting_preset');
            $table->boolean('experiments')->nullable()->default(false)->after('custom_event_association');
            $table->date('end_date')->nullable()->change();
            $table->integer('budget_type')->nullable()->after('end_date');
            $table->decimal('budget', 20)->change();
            $table->decimal('daily_budget', 20)->nullable()->change();
            $table->string('revenue_type')->nullable()->change();
            $table->decimal('revenue_amount', 20)->nullable()->change();
            $table->json('frequency_cap')->nullable()->after('revenue_amount');
            $table->integer('frequency_cap_type')->nullable()->after('frequency_cap');
            $table->string('frequency_cap_vendor')->nullable()->after('frequency_cap_type');
            $table->json('continents')->nullable()->after('frequency_cap_vendor');
            $table->string('currency')->nullable()->after('continents');
            $table->json('segment_extension_vendors')->nullable()->after('currency');
            $table->string('segment_extension')->nullable()->after('segment_extension_vendors');
            $table->string('segment_extension_type')->nullable()->after('segment_extension');
            $table->uuid('bid_modifier_id')->nullable()->after('segment_extension_type');
            $table->decimal('max_bid', 20)->after('bid_modifier_id');
            $table->decimal('min_bid', 20)->nullable()->after('max_bid');
            $table->uuid('delivery_modifier_id')->nullable()->after('min_bid');
            $table->boolean('enable_skad_tracking')->nullable()->default(false)->after('delivery_modifier_id');
            $table->string('alternative_id')->nullable()->after('enable_skad_tracking');
            $table->text('notes')->nullable()->change();
            $table->boolean('favorite')->default(false)->after('notes');
        });
    }

    public function down(): void
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->dropColumn([
                'set_campaign_preset',
                'set_line_item_preset',
                'default_targeting_preset',
                'custom_event_association',
                'experiments',
                'budget_type',
                'frequency_cap',
                'frequency_cap_type',
                'frequency_cap_vendor',
                'continents',
                'currency',
                'segment_extension_vendors',
                'segment_extension',
                'segment_extension_type',
                'bid_modifier_id',
                'max_bid',
                'min_bid',
                'delivery_modifier_id',
                'enable_skad_tracking',
                'alternative_id',
                'favorite'
            ]);
        });

        Schema::table('campaigns', function (Blueprint $table) {
            $table->string('set_campaign_present')->after('name');
            $table->string('set_line_item_present')->after('set_campaign_present');
            $table->string('default_targeting_present')->after('set_line_item_present');
            $table->string('custom_event_association')->after('default_targeting_present');
            $table->string('experiments')->after('custom_event_association');
            $table->string('budget_type')->after('end_date');
            $table->string('extension_vendor')->after('revenue_amount');
            $table->string('segment_vendor')->after('extension_vendor');
            $table->string('bid_modifier')->after('segment_vendor');
            $table->string('max_bid')->after('bid_modifier');
            $table->string('min_bid')->after('max_bid');
            $table->string('delivery_modifier')->after('min_bid');
            $table->string('external_id')->after('delivery_modifier');
        });
    }
};
