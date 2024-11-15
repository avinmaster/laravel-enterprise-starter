<?php

namespace Database\Seeders;

use App\Constants\Vendor\VendorConstants;
use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class VendorsSeeder extends Seeder
{
    public function run(): void
    {
        $vendors = [
            [
                'id' => Str::uuid()->toString(),
                'name' => 'MOAT',
                'active' => true,
                'global' => true,
                'notes' => 'Global vendor created by Beeswax for viewability fees',
                'fee_type' => VendorConstants::FEE_TYPE_CPM,
                'fee_amount' => 0.1,
                'currency' => VendorConstants::CURRENCY_USD,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'BEESWAX',
                'active' => true,
                'global' => true,
                'notes' => 'Automatically created Beeswax fees',
                'fee_type' => null,
                'fee_amount' => null,
                'currency' => VendorConstants::CURRENCY_USD,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'TAPAD',
                'active' => true,
                'global' => true,
                'notes' => 'Global vendor created by Beeswax for cross-device fees',
                'fee_type' => VendorConstants::FEE_TYPE_CPM,
                'fee_amount' => 0.5,
                'currency' => VendorConstants::CURRENCY_USD,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'PilotX Display',
                'active' => true,
                'global' => false,
                'notes' => null,
                'fee_type' => VendorConstants::FEE_TYPE_PERCENT,
                'fee_amount' => 50,
                'currency' => VendorConstants::CURRENCY_USD,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'PilotX OTT Video',
                'active' => true,
                'global' => false,
                'notes' => null,
                'fee_type' => VendorConstants::FEE_TYPE_PERCENT,
                'fee_amount' => 30,
                'currency' => VendorConstants::CURRENCY_USD,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'LIVERAMP',
                'active' => true,
                'global' => true,
                'notes' => 'Global vendor created by Beeswax for cross-device fees',
                'fee_type' => VendorConstants::FEE_TYPE_CPM,
                'fee_amount' => 0.5,
                'currency' => VendorConstants::CURRENCY_USD,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'FREEWHEEL',
                'active' => true,
                'global' => true,
                'notes' => 'Global vendor created by Beeswax for cross-device fees',
                'fee_type' => VendorConstants::FEE_TYPE_CPM,
                'fee_amount' => 0.5,
                'currency' => VendorConstants::CURRENCY_USD,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'HUMAN FraudSensor',
                'active' => true,
                'global' => true,
                'notes' => 'Global vendor created by Beeswax',
                'fee_type' => VendorConstants::FEE_TYPE_CPM,
                'fee_amount' => 0.05,
                'currency' => VendorConstants::CURRENCY_USD,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        $query = Vendor::query();

        $query->insert($vendors);
    }
}