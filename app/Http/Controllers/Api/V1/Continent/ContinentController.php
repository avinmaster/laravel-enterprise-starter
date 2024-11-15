<?php

namespace App\Http\Controllers\Api\V1\Continent;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Continent\IndexContinentRequest;
use App\Services\Continent\Actions\IndexContinentAction;
use App\Services\Continent\DTO\IndexContinentDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ContinentController extends ApiController
{
    public function index(
        IndexContinentRequest $indexContinentRequest,
        IndexContinentAction $indexContinentAction
    ): AnonymousResourceCollection {
        $dto = IndexContinentDTO::fromRequest($indexContinentRequest);

        return $indexContinentAction->run($dto);
    }
}