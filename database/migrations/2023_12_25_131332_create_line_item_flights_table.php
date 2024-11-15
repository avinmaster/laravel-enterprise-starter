<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('line_item_flights', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('line_item_id');
            $table->string('name')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('spend_budget')->nullable();
            $table->integer('impressions_budget')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('line_item_flights');
    }
};
