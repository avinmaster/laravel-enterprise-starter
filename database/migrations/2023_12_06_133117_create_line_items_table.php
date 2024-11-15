<?php

use App\Constants\LineItems\LineItemConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('line_items', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('advertiser_id');
            $table->uuid('campaign_id');
            $table->string('name');
            $table->string('alternative_id')->nullable();
            $table->boolean('active')->default(false);
            $table->boolean('favorite')->nullable()->default(false);
            $table->text('notes')->nullable();
            $table->integer('type')->default(LineItemConstants::TYPES[0]);

            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->uuid('targeting_template_id')->nullable();
            $table->decimal('budget', 20);
            $table->decimal('daily_budget', 20)->nullable();
            $table->integer('budget_type')->nullable()->default(
                LineItemConstants::BUDGET_TYPES[0]
            );
            $table->string('revenue_type')->nullable();
            $table->decimal('revenue_amount', 20)->nullable();
            $table->uuid('bid_modifier_id')->nullable();
            $table->uuid('delivery_modifier_id')->nullable();
            $table->decimal('max_bid', 20)->nullable();

            $table->string('bidding_strategy');
            $table->json('bidding_strategy_values');
            $table->boolean('bid_shading')->nullable()->default(false);
            $table->string('bid_shading_win_rate_control')->nullable()->default(
                LineItemConstants::BID_SHADING_WIN_RATE_CONTROL_NORMAL
            );
            $table->boolean('bidding_strategy_is_custom')->nullable();
            $table->string('bidding_strategy_pacing')->nullable()->default(
                LineItemConstants::BIDDING_STRATEGY_PACING_LIFETIME
            );
            $table->string('creative_weighting_method')->nullable()->default(
                LineItemConstants::CREATIVE_WEIGHTING_METHOD_RANDOM
            );
            $table->integer('frequency_cap_duration')->nullable();
            $table->integer('frequency_cap_impressions')->nullable();
            $table->integer('frequency_cap_type')->nullable()->default(
                LineItemConstants::FREQUENCY_CAP_TYPES[0]
            );
            $table->string('frequency_cap_vendor')->nullable();
            $table->json('user_timezones')->nullable();

            $table->string('segment_extension_default')->nullable()->default(
                LineItemConstants::SEGMENT_EXTENSION_DEFAULT_NONE
            );
            $table->string('segment_extension_type_default')->nullable()->default(
                LineItemConstants::SEGMENT_EXTENSION_TYPE_DEFAULT_NONE
            );
            $table->json('segment_extension_vendors_default')->nullable();
            $table->boolean('enable_skad_tracking')->nullable()->default(false);
            $table->string('skad_assignment_level')->nullable()->default(
                LineItemConstants::SKAD_ASSIGNMENT_LEVEL_CREATIVE_LINE_ITEM
            );
            $table->boolean('target_skad')->nullable()->default(false);
            $table->boolean('guaranteed')->nullable()->default(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('line_items');
    }
};
