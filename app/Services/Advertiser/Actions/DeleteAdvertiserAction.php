<?php

namespace App\Services\Advertiser\Actions;

use App\Repositories\Read\Advertiser\AdvertiserReadRepositoryInterface;
use App\Repositories\Write\Advertiser\AdvertiserWriteRepositoryInterface;

class DeleteAdvertiserAction
{
    public function __construct(
        protected AdvertiserReadRepositoryInterface $advertiserReadRepository,
        protected AdvertiserWriteRepositoryInterface $advertiserWriteRepository
    ) {
    }

    public function run(string $id): void
    {
        $advertiser = $this->advertiserReadRepository->getById($id);

        $this->advertiserWriteRepository->removeDefaultImage($advertiser);
        $this->advertiserWriteRepository->delete($id);
    }
}
