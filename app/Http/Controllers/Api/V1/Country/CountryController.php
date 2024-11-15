<?php

namespace App\Http\Controllers\Api\V1\Country;

use App\Http\Controllers\ApiController;
use App\Http\Requests\BaseListRequest;
use App\Http\Resources\Country\CountryResource;
use App\Models\Country;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CountryController extends ApiController
{
    public function index(
        BaseListRequest $request
    ): AnonymousResourceCollection {
        return CountryResource::collection(Country::query()->get());
    }
}