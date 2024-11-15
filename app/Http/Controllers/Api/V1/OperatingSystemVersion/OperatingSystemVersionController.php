<?php

namespace App\Http\Controllers\Api\V1\OperatingSystemVersion;

use App\Models\OperatingSystemVersion;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Resources\OperatingSystemVersion\OperatingSystemVersionResource;

class OperatingSystemVersionController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return OperatingSystemVersionResource::collection(OperatingSystemVersion::query()->get());
    }
}
