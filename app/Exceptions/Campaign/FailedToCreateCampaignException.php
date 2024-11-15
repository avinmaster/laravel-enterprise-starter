<?php

namespace App\Exceptions\Campaign;

use App\Exceptions\BusinessLogicException;

class FailedToCreateCampaignException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_CAMPAIGN;
    }

    public function getStatusMessage(): string
    {
        return __('errors.campaign.failed_create');
    }
}
