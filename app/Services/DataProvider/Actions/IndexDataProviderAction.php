<?php

namespace App\Services\DataProvider\Actions;

use App\Http\Resources\DataProvider\DataProviderResource;
use App\Repositories\Read\DataProvider\DataProviderReadRepositoryInterface;
use App\Services\DataProvider\DTO\IndexDataProviderDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexDataProviderAction
{
    public function __construct(
        protected DataProviderReadRepositoryInterface $dataProviderReadRepository
    ) {
    }

    public function run(IndexDataProviderDTO $dto): AnonymousResourceCollection
    {
        $dataProviders = $this->dataProviderReadRepository->index($dto);

        return DataProviderResource::collection($dataProviders);
    }
}
