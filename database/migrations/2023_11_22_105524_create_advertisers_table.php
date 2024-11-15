<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('advertisers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->string('name');
            $table->string('domain');
            $table->string('app_bundle')->nullable();
            $table->string('external_id');
            $table->text('notes')->nullable();
            $table->string('status');
            $table->uuid('default_currency');
            $table->uuid('default_continent');
            $table->uuid('category_id');
            $table->string('default_click_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisers');
    }
};
