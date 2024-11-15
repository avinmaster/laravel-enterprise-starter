<?php

namespace App\Services\AdvertiserCategory\Actions;

use App\Http\Resources\AdvertiserCategory\AdvertiserCategoryResource;
use App\Repositories\Read\AdvertiserCategory\AdvertiserCategoryReadRepositoryInterface;
use App\Services\AdvertiserCategory\DTO\IndexAdvertiserCategoryDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexAdvertiserCategoryAction
{
    public function __construct(
        protected AdvertiserCategoryReadRepositoryInterface $AdvertiserCategoryReadRepository
    ) {
    }

    public function run(IndexAdvertiserCategoryDTO $dto): AnonymousResourceCollection
    {
        $AdvertiserCategories = $this->AdvertiserCategoryReadRepository->index($dto);

        return AdvertiserCategoryResource::collection($AdvertiserCategories);
    }
}
