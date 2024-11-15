<?php

namespace App\Services\Continent\Actions;

use App\Http\Resources\Continent\ContinentResource;
use App\Repositories\Read\Continent\ContinentReadRepositoryInterface;
use App\Services\Continent\DTO\IndexContinentDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexContinentAction
{
    public function __construct(
        protected ContinentReadRepositoryInterface $continentReadRepository
    ) {
    }

    public function run(IndexContinentDTO $dto): AnonymousResourceCollection
    {
        $continents = $this->continentReadRepository->index($dto);

        return ContinentResource::collection($continents);
    }
}
