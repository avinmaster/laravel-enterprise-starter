<?php

namespace App\Services\Advertiser\Actions;

use App\Repositories\Write\Advertiser\AdvertiserWriteRepositoryInterface;

class BulkDeleteAdvertiserAction
{
    public function __construct(
        protected AdvertiserWriteRepositoryInterface $advertiserWriteRepository
    ) {
    }

    public function run(array $ids): void
    {
        $this->advertiserWriteRepository->bulkRemoveDefaultImages($ids);
        $this->advertiserWriteRepository->bulkDelete($ids);
    }
}
