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
    public function up() {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            // site_id, placement_id, site_name, inventory_source_id, volume_ranking
            $table->string('site_id');
            $table->string('site_name');
            $table->string('placement_id');
            $table->unsignedBigInteger('inventory_source_id');
            $table->integer('volume_ranking');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('inventories');
    }
};
