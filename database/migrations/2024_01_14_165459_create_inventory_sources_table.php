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
        Schema::create('inventory_sources', function (Blueprint $table) {
            $table->id();
            $table->boolean("account_viewable")->nullable();
            $table->boolean("default_viewable");
            $table->boolean("viewable");
            $table->boolean("super_user_only");
            $table->boolean("active");
            $table->string("name");
            $table->string("key");
            $table->boolean("mobile_app");
            $table->boolean("mobile_web");
            $table->boolean("video");
            $table->boolean("desktop");
            $table->boolean("mobile_native");
            $table->boolean("desktop_native");
            $table->boolean("other");
            $table->string("category")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_sources');
    }
};
