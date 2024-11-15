<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('creative_line_items', function (Blueprint $table) {
            $table->dropColumn('start_date');
            $table->dropColumn('end_date');
            $table->dropColumn('weighting');
            $table->dropColumn('active');
        });

        Schema::table('creative_line_items', function (Blueprint $table) {
            $table->timestamp('end_date')->nullable()->after('line_item_id');
            $table->timestamp('start_date')->nullable()->after('line_item_id');
            $table->string('weight')->nullable()->after('line_item_id');
            $table->boolean('active')->default(true)->nullable()->after('line_item_id');
        });
    }

    public function down(): void
    {
        Schema::table('creative_line_items', function (Blueprint $table) {
            $table->dropColumn('start_date');
            $table->dropColumn('end_date');
            $table->dropColumn('weight');
            $table->dropColumn('active');
        });

        Schema::table('creative_line_items', function (Blueprint $table) {
            $table->date('end_date')->nullable()->after('line_item_id');
            $table->date('start_date')->nullable()->after('line_item_id');
            $table->string('weighting')->nullable()->after('line_item_id');
            $table->boolean('active')->default(false)->nullable()->after('line_item_id');
        });
    }
};
