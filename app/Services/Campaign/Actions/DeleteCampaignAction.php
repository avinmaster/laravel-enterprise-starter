<?php

namespace App\Services\Campaign\Actions;

use App\Repositories\Write\Campaign\CampaignWriteRepositoryInterface;

class DeleteCampaignAction
{
    public function __construct(
        protected CampaignWriteRepositoryInterface $campaignWriteRepository
    ) {
    }

    public function run(string $id): void
    {
        $this->campaignWriteRepository->delete($id);
    }
}
