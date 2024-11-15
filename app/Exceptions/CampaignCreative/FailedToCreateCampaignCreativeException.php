<?php

namespace App\Exceptions\CampaignCreative;

use App\Exceptions\BusinessLogicException;

class FailedToCreateCampaignCreativeException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_CAMPAIGN_CREATIVE;
    }

    public function getStatusMessage(): string
    {
        return __('errors.campaign_creative.failed_create');
    }
}
