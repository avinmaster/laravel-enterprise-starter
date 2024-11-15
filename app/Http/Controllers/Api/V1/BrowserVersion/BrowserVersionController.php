<?php

namespace App\Http\Controllers\Api\V1\BrowserVersion;

use App\Models\BrowserVersion;
use App\Http\Controllers\ApiController;
use App\Http\Resources\BrowserVersion\BrowserVersionResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BrowserVersionController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return BrowserVersionResource::collection(BrowserVersion::query()->get());
    }
}
