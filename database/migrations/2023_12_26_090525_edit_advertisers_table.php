<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('advertisers', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('external_id');
            $table->string('alternative_id')->nullable()->after('app_bundle');
            $table->boolean('active')->nullable()->default(false)->after('default_click_url');
            $table->uuid('default_campaign_preset')->nullable()->after('active');
            $table->string('default_creative_thumbnail_url')->nullable()->after('default_campaign_preset');
            $table->uuid('default_line_item_preset')->nullable()->after('default_creative_thumbnail_url');
            $table->uuid('default_targeting_preset')->nullable()->after('default_line_item_preset');
            $table->boolean('is_comcast_segment_eligible')->nullable()->after('default_targeting_preset');
            $table->string('skad_mmp')->nullable()->after('is_comcast_segment_eligible');
        });
    }

    public function down(): void
    {
        Schema::table('advertisers', function (Blueprint $table) {
            $table->string('status');
            $table->string('external_id');
            $table->dropColumn(
                [
                    'alternative_id',
                    'active',
                    'default_campaign_preset',
                    'default_creative_thumbnail_url',
                    'default_line_item_preset',
                    'default_targeting_preset',
                    'is_comcast_segment_eligible',
                    'skad_mmp'
                ]
            );
        });
    }
};
