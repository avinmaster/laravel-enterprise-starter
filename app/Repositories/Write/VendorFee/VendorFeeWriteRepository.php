<?php

namespace App\Repositories\Write\VendorFee;

use App\Exceptions\VendorFee\FailedToCreateVendorFeeException;
use App\Models\VendorFee;
use Illuminate\Database\Eloquent\Builder;

class VendorFeeWriteRepository implements VendorFeeWriteRepositoryInterface
{

    /**
     * @throws FailedToCreateVendorFeeException
     */
    public function create(array $data): VendorFee
    {
        /* @var VendorFee $vendorFee */
        if (!$vendorFee = $this->query()->create($data)) {
            throw new FailedToCreateVendorFeeException();
        }

        return $vendorFee;
    }
    
    private function query(): Builder
    {
        return VendorFee::query();
    }
}
