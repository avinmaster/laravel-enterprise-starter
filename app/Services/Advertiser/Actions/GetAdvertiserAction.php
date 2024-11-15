<?php

namespace App\Services\Advertiser\Actions;

use App\Http\Resources\Advertiser\AdvertiserResource;
use App\Models\Advertiser;
use App\Repositories\Read\Advertiser\AdvertiserReadRepositoryInterface;

class GetAdvertiserAction
{
    public function __construct(
        protected AdvertiserReadRepositoryInterface $advertiserReadRepository
    ) {
    }

    public function run(string $id): AdvertiserResource
    {
        $advertiser = $this->advertiserReadRepository->getById($id, Advertiser::RELATIONS);

        return new AdvertiserResource($advertiser);
    }
}
