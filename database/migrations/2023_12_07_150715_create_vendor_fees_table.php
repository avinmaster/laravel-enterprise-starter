<?php

use App\Constants\VendorFee\VendorFeeConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('vendor_fees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('vendor_id');
            $table->string('name')->nullable();
            $table->string('alternative_id')->nullable();
            $table->boolean('active')->nullable()->default(false);
            $table->text('notes')->nullable();
            $table->string('object_type');
            $table->uuid('object_id');
            $table->string('fee_type')->nullable();
            $table->decimal('fee_amount', 4)->nullable();
            $table->string('currency')->nullable()->default(VendorFeeConstants::CURRENCY_USD);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendor_fees');
    }
};
