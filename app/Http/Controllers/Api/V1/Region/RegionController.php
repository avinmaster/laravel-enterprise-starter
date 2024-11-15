<?php

namespace App\Http\Controllers\Api\V1\Region;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Region\IndexRegionRequest;
use App\Services\Region\Actions\IndexRegionAction;
use App\Services\Region\DTO\IndexRegionDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RegionController extends ApiController
{
    public function index(
        IndexRegionRequest $indexRegionRequest,
        IndexRegionAction $indexRegionAction
    ): AnonymousResourceCollection {
        $dto = IndexRegionDTO::fromRequest($indexRegionRequest);

        return $indexRegionAction->run($dto);
    }
}