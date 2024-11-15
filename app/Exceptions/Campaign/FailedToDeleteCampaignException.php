<?php

namespace App\Exceptions\Campaign;

use App\Exceptions\BusinessLogicException;

class FailedToDeleteCampaignException extends BusinessLogicException
{

    public function getStatus(): int
    {
       return BusinessLogicException::FAILED_TO_DELETE_CAMPAIGN;
    }

    public function getStatusMessage(): string
    {
        return __('errors.campaign.failed_delete');
    }
}
