<?php

namespace App\Repositories\Write\CampaignCreative;

use App\Models\CampaignCreative;

interface CampaignCreativeWriteRepositoryInterface
{
    public function create(array $data): CampaignCreative;
}
