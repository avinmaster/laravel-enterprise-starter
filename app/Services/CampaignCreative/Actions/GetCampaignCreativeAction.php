<?php

namespace App\Services\CampaignCreative\Actions;

use App\Http\Resources\CampaignCreative\CampaignCreativeResource;
use App\Repositories\Read\CampaignCreative\CampaignCreativeReadRepositoryInterface;

class GetCampaignCreativeAction
{
    public function __construct(
        protected CampaignCreativeReadRepositoryInterface $campaignCreativeReadRepository
    ) {
    }

    public function run(string $id): CampaignCreativeResource
    {
        $campaignCreative = $this->campaignCreativeReadRepository->getById($id);

        return new CampaignCreativeResource($campaignCreative);
    }
}
