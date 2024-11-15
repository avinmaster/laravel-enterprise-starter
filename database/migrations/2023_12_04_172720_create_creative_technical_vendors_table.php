<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('creative_technical_vendors', function (Blueprint $table) {
            $table->id();
            $table->uuid('creative_id');
            $table->integer('technical_vendor_id');
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('creative_technical_vendors');
    }
};
