<?php

use App\Constants\CreativeAddon\CreativeAddonConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('creative_addons', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->uuid('advertiser_id')->nullable();
            $table->boolean('include_by_default')->nullable()->default(false);
            $table->integer('creative_type')->nullable()->default(CreativeAddonConstants::CREATIVE_TYPES[0]);
            $table->string('type');
            $table->text('content');
            $table->boolean('secure')->nullable()->default(false);
            $table->double('cpm_cost')->nullable();
            $table->string('notes')->nullable();
            $table->boolean('active')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('creative_addons');
    }
};
