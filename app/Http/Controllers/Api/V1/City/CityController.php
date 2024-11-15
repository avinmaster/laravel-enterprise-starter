<?php

namespace App\Http\Controllers\Api\V1\City;

use App\Http\Controllers\ApiController;
use App\Http\Requests\City\IndexCityRequest;
use App\Services\City\Actions\IndexCityAction;
use App\Services\City\DTO\IndexCityDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CityController extends ApiController
{
    public function index(
        IndexCityRequest $indexCityRequest,
        IndexCityAction $indexCityAction
    ): AnonymousResourceCollection {
        $dto = IndexCityDTO::fromRequest($indexCityRequest);

        return $indexCityAction->run($dto);
    }
}