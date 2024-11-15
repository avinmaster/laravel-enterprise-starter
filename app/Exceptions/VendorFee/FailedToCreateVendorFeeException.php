<?php

namespace App\Exceptions\VendorFee;

use App\Exceptions\BusinessLogicException;

class FailedToCreateVendorFeeException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_VENDOR_FEE;
    }

    public function getStatusMessage(): string
    {
        return __('errors.vendor_fee.failed_create');
    }
}
