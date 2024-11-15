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
        Schema::create('segment_trees', function (Blueprint $table) {
            $table->id();
            $table->string('cpm')->nullable();
            $table->string('type');
            $table->string('key');
            $table->string('name');
            $table->string('parent_key')->nullable();
            $table->string('alternative_id')->nullable();
            $table->string('verb_usage')->nullable();
            $table->unsignedBigInteger('data_provider_id')->nullable();
            $table->timestamps();

            // data_provider_id is connected with account_id in data_providers table
            // add index
            $table->foreign('data_provider_id')
                ->references('account_id')
                ->on('data_providers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('segment_trees');
    }
};
