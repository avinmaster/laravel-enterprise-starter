<?php

namespace App\Http\Controllers\Api\V1\CreativeAttribute;

use App\Models\CreativeAttribute;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Resources\CreativeAttribute\CreativeAttributeResource;

class CreativeAttributeController extends ApiController
{
    public function index(): AnonymousResourceCollection
    {
        return CreativeAttributeResource::collection(CreativeAttribute::all()->sortBy('key'));
    }
}
