<?php

namespace App\Http\Controllers\Api\V1\DeviceMake;

use App\Models\DeviceMake;
use App\Http\Controllers\ApiController;
use App\Http\Resources\DeviceMake\DeviceMakeResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DeviceMakeController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return DeviceMakeResource::collection(DeviceMake::query()->get());
    }
}
