<?php

namespace App\Http\Controllers\Api\V1\ApiFramework;

use App\Models\ApiFramework;
use App\Http\Controllers\ApiController;
use App\Http\Resources\ApiFramework\ApiFrameworkResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ApiFrameworkController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return ApiFrameworkResource::collection(ApiFramework::all()->sortBy('key'));
    }
}
