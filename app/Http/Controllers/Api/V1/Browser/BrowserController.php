<?php

namespace App\Http\Controllers\Api\V1\Browser;

use App\Models\Browser;
use App\Http\Controllers\ApiController;
use App\Http\Resources\Browser\BrowserResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BrowserController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return BrowserResource::collection(Browser::query()->get());
    }
}
