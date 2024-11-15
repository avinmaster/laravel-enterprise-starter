<?php

namespace App\Exceptions\VendorFee;

use App\Exceptions\BusinessLogicException;

class VendorFeeDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::VENDOR_FEE_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.vendor_fee.does_not_exist');
    }
}
