<?php

namespace App\Services\VendorFee\Actions;

use App\Http\Resources\VendorFee\VendorFeeResource;
use App\Models\VendorFee;
use App\Repositories\Write\VendorFee\VendorFeeWriteRepositoryInterface;
use App\Services\VendorFee\DTO\CreateVendorFeeDTO;

class CreateVendorFeeAction
{
    public function __construct(
        protected VendorFeeWriteRepositoryInterface $vendorFeeWriteRepository
    ) {
    }

    public function run(CreateVendorFeeDTO $dto): VendorFeeResource
    {
        $data = VendorFee::createModel($dto);
        $vendorFee = $this->vendorFeeWriteRepository->create($data);

        return new VendorFeeResource($vendorFee);
    }
}
