<?php

namespace App\Exceptions\Campaign;

use App\Exceptions\BusinessLogicException;

class FailedToUpdateCampaignException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_UPDATE_CAMPAIGN;
    }

    public function getStatusMessage(): string
    {
        return __('errors.campaign.failed_update');
    }
}
