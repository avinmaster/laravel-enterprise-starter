<?php

namespace App\Exceptions\Campaign;

use App\Exceptions\BusinessLogicException;

class CampaignDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::CAMPAIGN_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.campaign.does_not_exist');
    }
}
