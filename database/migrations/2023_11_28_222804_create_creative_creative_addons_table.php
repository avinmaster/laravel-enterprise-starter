<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('creative_creative_addons', function (Blueprint $table) {
            $table->id();
            $table->uuid('creative_id');
            $table->uuid('creative_addon_id');
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('creative_creative_addons');
    }
};
