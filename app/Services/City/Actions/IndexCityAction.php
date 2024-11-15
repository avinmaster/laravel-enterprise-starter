<?php

namespace App\Services\City\Actions;

use App\Http\Resources\City\CityResource;
use App\Repositories\Read\City\CityReadRepositoryInterface;
use App\Services\City\DTO\IndexCityDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexCityAction
{
    public function __construct(
        protected CityReadRepositoryInterface $cityReadRepository
    ) {
    }

    public function run(IndexCityDTO $dto): AnonymousResourceCollection
    {
        $cities = $this->cityReadRepository->index($dto);

        return CityResource::collection($cities);
    }
}
