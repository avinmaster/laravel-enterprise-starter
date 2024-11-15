<?php

namespace App\Services\Advertiser\Actions;

use App\Models\Advertiser;
use App\Services\Advertiser\DTO\IndexAdvertiserDTO;
use App\Http\Resources\Advertiser\AdvertiserResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Repositories\Read\Advertiser\AdvertiserReadRepositoryInterface;

class IndexAdvertiserAction
{
    public function __construct(
        protected AdvertiserReadRepositoryInterface $advertiserReadRepository
    ) {
    }

    public function run(IndexAdvertiserDTO $dto): AnonymousResourceCollection
    {
        $advertisers = $this->advertiserReadRepository->index($dto, Advertiser::RELATIONS);

        return AdvertiserResource::collection($advertisers);
    }
}
