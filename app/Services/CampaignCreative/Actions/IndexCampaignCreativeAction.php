<?php

namespace App\Services\CampaignCreative\Actions;

use App\Services\CampaignCreative\DTO\IndexCampaignCreativeDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Resources\CampaignCreative\CampaignCreativeResource;
use App\Repositories\Read\CampaignCreative\CampaignCreativeReadRepositoryInterface;

class IndexCampaignCreativeAction
{
    public function __construct(
        protected CampaignCreativeReadRepositoryInterface $campaignCreativeReadRepository
    ) {
    }

    public function run(IndexCampaignCreativeDTO $dto): AnonymousResourceCollection
    {
        $campaignCreatives = $this->campaignCreativeReadRepository->index($dto);

        return CampaignCreativeResource::collection($campaignCreatives);
    }
}
