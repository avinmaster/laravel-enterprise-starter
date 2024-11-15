<?php

namespace App\Exceptions\CampaignCreative;

use App\Exceptions\BusinessLogicException;

class CampaignCreativeDoesNotExistException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::CAMPAIGN_CREATIVE_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.campaign_creative.does_not_exist');
    }
}
