<?php

namespace App\Services\Campaign\Actions;

use App\Services\Campaign\DTO\IndexCampaignDTO;
use App\Http\Resources\Campaign\CampaignResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Repositories\Read\Campaign\CampaignReadRepositoryInterface;

class IndexCampaignAction
{
    public function __construct(
        protected CampaignReadRepositoryInterface $campaignReadRepository
    ) {
    }

    public function run(IndexCampaignDTO $dto): AnonymousResourceCollection
    {
        $campaigns = $this->campaignReadRepository->index($dto, ['lineItems']);

        return CampaignResource::collection($campaigns);
    }
}
