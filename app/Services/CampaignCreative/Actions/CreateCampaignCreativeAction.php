<?php

namespace App\Services\CampaignCreative\Actions;

use App\Models\CampaignCreative;
use App\Services\CampaignCreative\DTO\CreateCampaignCreativeDTO;
use App\Http\Resources\CampaignCreative\CampaignCreativeResource;
use App\Repositories\Write\CampaignCreative\CampaignCreativeWriteRepositoryInterface;

class CreateCampaignCreativeAction
{
    public function __construct(
        protected CampaignCreativeWriteRepositoryInterface $campaignCreativeWriteRepository
    ) {
    }

    public function run(CreateCampaignCreativeDTO $dto): CampaignCreativeResource
    {
        $data = CampaignCreative::createModel($dto);

        $campaignCreative = $this->campaignCreativeWriteRepository->create($data);

        return new CampaignCreativeResource($campaignCreative);
    }
}
