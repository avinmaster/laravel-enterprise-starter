<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('technical_vendors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('creative_vendor_id')->nullable();
            $table->string('creative_vendor_name');
            $table->bigInteger('iab_gdpr_vendor_id')->nullable();
            $table->bigInteger('adx_gdpr_provider_id')->nullable();
            $table->bigInteger('adx_vendor_approval_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('technical_vendors');
    }
};
