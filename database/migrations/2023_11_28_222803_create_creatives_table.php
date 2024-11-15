<?php

use App\Constants\Creative\CreativeConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('creatives', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('advertiser_id');
            $table->string('name');
            $table->integer('type')->default(CreativeConstants::TYPES[0]);
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->boolean('sizeless')->nullable()->default(false);
            $table->boolean('secure')->default(false);
            $table->string('click_url')->nullable();
            $table->uuid('native_offer')->nullable();
            $table->string('content_tag')->nullable();
            $table->uuid('template_id');
            $table->uuid('rule_id')->nullable();
            $table->string('rule_key')->nullable();
            $table->json('pixels')->nullable();
            $table->json('scripts')->nullable();
            $table->text('thumbnail_url')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('alternative_id')->nullable();
            $table->string('notes')->nullable();
            $table->boolean('active')->nullable()->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('creatives');
    }
};
