<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->dropColumn([
                'frequency_cap',
            ]);
        });

        Schema::table('campaigns', function (Blueprint $table) {
            $table->integer('frequency_cap_duration')->nullable()->after('revenue_amount');
            $table->integer('frequency_cap_impressions')->nullable()->after('frequency_cap_duration');
        });
    }

    public function down(): void
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->dropColumn([
                'frequency_cap_duration',
                'frequency_cap_impressions',
            ]);
        });

        Schema::table('campaigns', function (Blueprint $table) {
            $table->json('frequency_cap')->nullable()->after('revenue_amount');
        });
    }
};
