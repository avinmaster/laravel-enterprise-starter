<?php

namespace App\Http\Controllers\Api\V1\Bandwidth;

use App\Models\Bandwidth;
use App\Http\Controllers\ApiController;
use App\Http\Resources\Bandwidth\BandwidthResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BandwidthController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return BandwidthResource::collection(Bandwidth::query()->get());
    }
}
