<?php

namespace App\Http\Controllers\Api\V1\CreativeAddon;

use App\Http\Controllers\ApiController;
use App\Http\Resources\CreativeAddon\CreativeAddonResource;
use App\Models\CreativeAddon;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CreativeAddonController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return CreativeAddonResource::collection(CreativeAddon::all());
    }
}