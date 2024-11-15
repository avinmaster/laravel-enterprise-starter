<?php

namespace App\Services\Campaign\Actions;

use App\Models\Campaign;
use App\Services\Campaign\DTO\CreateCampaignDTO;
use App\Http\Resources\Campaign\CampaignResource;
use App\Repositories\Write\Campaign\CampaignWriteRepositoryInterface;

class CreateCampaignAction
{
    public function __construct(
        protected CampaignWriteRepositoryInterface $campaignWriteRepository
    ) {
    }

    public function run(CreateCampaignDTO $dto): CampaignResource
    {
        $data = Campaign::createModel($dto);
        $campaign = $this->campaignWriteRepository->create($data);

        return new CampaignResource($campaign);
    }
}
