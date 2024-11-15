<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lists', function (Blueprint $table) {
            $table->id();
            $table->integer('original_id')->nullable();
            $table->string('name');
            $table->string('type');
            $table->boolean('active');
            $table->string('alternative_id')->nullable();
            $table->text('notes')->nullable();
            $table->json('attributes')->nullable();
            $table->string('upload_type')->nullable();
            $table->string('delimiter')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lists');
    }
};
