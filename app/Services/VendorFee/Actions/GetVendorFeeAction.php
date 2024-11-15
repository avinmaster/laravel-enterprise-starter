<?php

namespace App\Services\VendorFee\Actions;

use App\Http\Resources\VendorFee\VendorFeeResource;
use App\Repositories\Read\VendorFee\VendorFeeReadRepositoryInterface;

class GetVendorFeeAction
{
    public function __construct(
        protected VendorFeeReadRepositoryInterface $vendorFeeReadRepository
    ) {
    }

    public function run(string $id): VendorFeeResource
    {
        $vendorFee = $this->vendorFeeReadRepository->getById($id);

        return new VendorFeeResource($vendorFee);
    }
}
