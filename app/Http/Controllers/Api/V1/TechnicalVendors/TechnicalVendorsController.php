<?php

namespace App\Http\Controllers\Api\V1\TechnicalVendors;

use App\Http\Controllers\ApiController;
use App\Http\Requests\ListRequest;
use App\Http\Resources\TechnicalVendor\TechnicalVendorResource;
use App\Models\TechnicalVendor;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TechnicalVendorsController extends ApiController
{
    public function index(
        ListRequest $request
    ): AnonymousResourceCollection {
        return TechnicalVendorResource::collection(TechnicalVendor::query()->get());
    }
}