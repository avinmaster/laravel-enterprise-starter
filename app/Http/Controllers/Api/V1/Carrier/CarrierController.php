<?php

namespace App\Http\Controllers\Api\V1\Carrier;

use App\Models\Carrier;
use App\Http\Controllers\ApiController;
use App\Http\Resources\Carrier\CarrierResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CarrierController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return CarrierResource::collection(Carrier::query()->get());
    }
}
