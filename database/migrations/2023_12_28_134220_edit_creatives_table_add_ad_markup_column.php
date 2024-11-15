<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('creatives', function (Blueprint $table) {
            $table->text('ad_markup')->nullable()->after('height');
        });
    }

    public function down(): void
    {
        Schema::table('creatives', function (Blueprint $table) {
            $table->dropColumn('ad_markup');
        });
    }
};
