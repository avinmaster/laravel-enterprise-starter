<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('line_items', function (Blueprint $table) {
            $table->uuid('targeting_expression_id')->nullable()->after('targeting_template_id');
        });
    }

    public function down(): void
    {
        Schema::table('line_items', function (Blueprint $table) {
            $table->dropColumn('targeting_expression_id');
        });
    }
};
