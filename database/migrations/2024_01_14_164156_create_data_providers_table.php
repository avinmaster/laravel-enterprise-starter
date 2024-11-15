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
        Schema::create('data_providers', function (Blueprint $table) {
            $table->id();
            $table->boolean('active');
            $table->unsignedBigInteger('account_id')->unique();
            $table->string('name');
            $table->string('buzz_key');
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
        Schema::dropIfExists('data_providers');
    }
};
