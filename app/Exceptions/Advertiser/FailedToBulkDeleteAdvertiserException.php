<?php

namespace App\Exceptions\Advertiser;

use App\Exceptions\BusinessLogicException;

class FailedToBulkDeleteAdvertiserException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_BULK_DELETE_ADVERTISER;
    }

    public function getStatusMessage(): string
    {
        return __('errors.advertiser.failed_bulk_delete');
    }
}
