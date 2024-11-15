<?php

namespace App\Http\Controllers\Api\V1\CreativeSize;

use App\Http\Controllers\Controller;
use App\Http\Resources\CreativeSize\CreativeSizeResource;
use App\Models\CreativeSize;

class CreativeSizeController extends Controller
{
    public function index() {
        return CreativeSizeResource::collection(CreativeSize::all());
    }
}
