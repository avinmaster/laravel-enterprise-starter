<?php

namespace App\Http\Controllers\Api\V1\AdPosition;

use App\Models\AdPosition;
use App\Http\Controllers\ApiController;
use App\Http\Resources\AdPosition\AdPositionResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AdPositionController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return AdPositionResource::collection(AdPosition::all()->sortBy('key'));
    }
}
