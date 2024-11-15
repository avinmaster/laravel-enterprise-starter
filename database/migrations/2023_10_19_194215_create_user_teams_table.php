<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_teams', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->uuid('team_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_teams');
    }
};
