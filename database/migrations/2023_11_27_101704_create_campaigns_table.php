<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('advertiser_id');
            $table->string('name');
            $table->string('set_campaign_present');
            $table->string('set_line_item_present');
            $table->string('default_targeting_present');
            $table->string('custom_event_association');
            $table->string('experiments');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('budget_type');
            $table->decimal('budget');
            $table->decimal('daily_budget');
            $table->string('revenue_type');
            $table->decimal('revenue_amount',8,2);
            $table->string('extension_vendor');
            $table->string('segment_vendor');
            $table->string('bid_modifier');
            $table->string('max_bid');
            $table->string('min_bid');
            $table->string('delivery_modifier');
            $table->string('external_id');
            $table->boolean('active');
            $table->text('notes');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
