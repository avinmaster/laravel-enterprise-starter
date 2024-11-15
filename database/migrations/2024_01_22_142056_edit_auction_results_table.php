<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('auction_results', function (Blueprint $table) {
            $table->uuid('ad_id')->after('id')->nullable()->change();
        });
    }

    public function down(): void
    {
        //
    }
};
