<?php

namespace App\Http\Controllers\Api\V1\VendorFee;

use App\Http\Controllers\ApiController;
use App\Http\Requests\VendorFee\CreateVendorFeeRequest;
use App\Http\Requests\VendorFee\GetVendorFeeRequest;
use App\Http\Requests\VendorFee\IndexVendorFeeRequest;
use App\Http\Resources\VendorFee\VendorFeeResource;
use App\Services\VendorFee\Actions\CreateVendorFeeAction;
use App\Services\VendorFee\Actions\GetVendorFeeAction;
use App\Services\VendorFee\Actions\IndexVendorFeeAction;
use App\Services\VendorFee\DTO\CreateVendorFeeDTO;
use App\Services\VendorFee\DTO\IndexVendorFeeDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class VendorFeeController extends ApiController
{
    public function show(
        GetVendorFeeRequest $request,
        GetVendorFeeAction $getVendorFeeAction
    ): VendorFeeResource {
        return $getVendorFeeAction->run($request->getId());
    }

    public function index(
        IndexVendorFeeRequest $indexVendorFeeRequest,
        IndexVendorFeeAction $indexVendorFeeAction
    ): AnonymousResourceCollection {
        $dto = IndexVendorFeeDTO::fromRequest($indexVendorFeeRequest);

        return $indexVendorFeeAction->run($dto);
    }

    public function create(
        CreateVendorFeeRequest $createVendorFeeRequest,
        CreateVendorFeeAction $createVendorFeeAction
    ): VendorFeeResource {
        $dto = CreateVendorFeeDTO::fromRequest($createVendorFeeRequest);

        return $createVendorFeeAction->run($dto);
    }
}