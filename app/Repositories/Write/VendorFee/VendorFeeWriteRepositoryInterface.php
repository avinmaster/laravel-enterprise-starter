<?php

namespace App\Repositories\Write\VendorFee;

use App\Models\VendorFee;

interface VendorFeeWriteRepositoryInterface
{
    public function create(array $data): VendorFee;
}
