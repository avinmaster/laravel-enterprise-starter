<?php

namespace App\Services\VendorFee\Actions;

use App\Http\Resources\VendorFee\VendorFeeResource;
use App\Repositories\Read\VendorFee\VendorFeeReadRepositoryInterface;
use App\Services\VendorFee\DTO\IndexVendorFeeDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexVendorFeeAction
{
    public function __construct(
        protected VendorFeeReadRepositoryInterface $vendorFeeReadRepository
    ) {
    }

    public function run(IndexVendorFeeDTO $dto): AnonymousResourceCollection
    {
        $vendorFees = $this->vendorFeeReadRepository->index($dto);

        return VendorFeeResource::collection($vendorFees);
    }
}
