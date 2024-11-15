<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->boolean('active');
            $table->integer('type');
            $table->decimal('cpm_bid');
            $table->string('currency');
            $table->json('advertiser')->nullable();
            $table->json('campaign')->nullable();
            $table->json('creatives')->nullable();
            $table->json('targeting_include')->nullable();
            $table->json('targeting_exclude')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
