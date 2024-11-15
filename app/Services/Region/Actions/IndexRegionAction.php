<?php

namespace App\Services\Region\Actions;

use App\Http\Resources\Region\RegionResource;
use App\Repositories\Read\Region\RegionReadRepositoryInterface;
use App\Services\Region\DTO\IndexRegionDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexRegionAction
{
    public function __construct(
        protected RegionReadRepositoryInterface $regionReadRepository
    ) {
    }

    public function run(IndexRegionDTO $dto): AnonymousResourceCollection
    {
        $regions = $this->regionReadRepository->index($dto);

        return RegionResource::collection($regions);
    }
}
