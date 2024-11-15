<?php

use App\Constants\Vendor\VendorConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('alternative_id')->nullable();
            $table->boolean('active')->nullable()->default(false);
            $table->boolean('global')->nullable()->default(false);
            $table->text('notes')->nullable();
            $table->string('fee_type')->nullable();
            $table->decimal('fee_amount', 4)->nullable();
            $table->string('currency')->default(VendorConstants::CURRENCY_USD);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
