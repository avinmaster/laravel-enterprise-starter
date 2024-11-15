<?php

namespace App\Http\Controllers\Api\V1\Vendor;

use App\Http\Controllers\ApiController;
use App\Http\Resources\Vendor\VendorResource;
use App\Models\Vendor;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class VendorController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return VendorResource::collection(Vendor::all());
    }
}