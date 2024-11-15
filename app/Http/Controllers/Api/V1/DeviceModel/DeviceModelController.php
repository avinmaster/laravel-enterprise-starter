<?php

namespace App\Http\Controllers\Api\V1\DeviceModel;

use App\Models\DeviceModel;
use App\Http\Controllers\ApiController;
use App\Http\Resources\DeviceModel\DeviceModelResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DeviceModelController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return DeviceModelResource::collection(DeviceModel::query()->get());
    }
}
