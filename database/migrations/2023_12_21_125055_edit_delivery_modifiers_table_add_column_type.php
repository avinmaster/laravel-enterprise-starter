<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('delivery_modifiers', function (Blueprint $table) {
            $table->string('type')->after('name');
        });
    }

    public function down(): void
    {
        Schema::table('delivery_modifiers', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
