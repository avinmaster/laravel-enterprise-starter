<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('delivery_modifiers', function (Blueprint $table) {
            $table->uuid('advertiser_id')->nullable()->change();
            $table->uuid('bid_model_id')->nullable()->after('advertiser_id');
            $table->string('alternative_id')->nullable()->change();
            $table->float('default_delivery')->after('alternative_id');
            $table->text('notes')->nullable()->change();
            $table->string('modifier_type')->nullable()->change();
            $table->boolean('active')->nullable()->after('notes');
            $table->json('delivery_modifier_terms')->nullable()->after('name');
        });
    }

    public function down(): void
    {
        Schema::table('delivery_modifiers', function (Blueprint $table) {
            $table->dropColumn([
                'bid_model_id',
                'active',
                'default_delivery',
                'delivery_modifier_terms'
            ]);
        });
    }
};
