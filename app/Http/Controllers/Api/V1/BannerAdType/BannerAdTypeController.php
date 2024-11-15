<?php

namespace App\Http\Controllers\Api\V1\BannerAdType;

use App\Models\BannerAdType;
use App\Http\Controllers\ApiController;
use App\Http\Resources\BannerAdType\BannerAdTypeResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BannerAdTypeController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return BannerAdTypeResource::collection(BannerAdType::all()->sortBy('key'));
    }
}
