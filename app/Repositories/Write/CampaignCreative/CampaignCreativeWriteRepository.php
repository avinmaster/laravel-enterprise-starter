<?php

namespace App\Repositories\Write\CampaignCreative;

use App\Models\CampaignCreative;
use Illuminate\Database\Eloquent\Builder;
use App\Exceptions\CampaignCreative\FailedToCreateCampaignCreativeException;

class CampaignCreativeWriteRepository implements CampaignCreativeWriteRepositoryInterface
{
    /**
     * @throws FailedToCreateCampaignCreativeException
     */
    public function create(array $data): CampaignCreative
    {
        /* @var CampaignCreative $campaignCreative */
        if (!$campaignCreative = $this->query()->create($data)) {
            throw new FailedToCreateCampaignCreativeException();
        }

        return $campaignCreative;
    }

    private function query(): Builder
    {
        return CampaignCreative::query();
    }
}
