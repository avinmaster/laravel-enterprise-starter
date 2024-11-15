<?php

namespace App\Services\Campaign\Actions;

use App\Http\Resources\Campaign\CampaignResource;
use App\Repositories\Read\Campaign\CampaignReadRepositoryInterface;

class GetCampaignAction
{
    public function __construct(
        protected CampaignReadRepositoryInterface $campaignReadRepository
    ) {
    }

    public function run(string $id): CampaignResource
    {
        $campaign = $this->campaignReadRepository->getById($id);

        return new CampaignResource($campaign);
    }
}
