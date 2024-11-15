<?php

namespace App\Exceptions\LineItem;

use App\Exceptions\BusinessLogicException;

class FailedToCreateLineItemException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_LINE_ITEM;
    }

    public function getStatusMessage(): string
    {
        return __('errors.line_item.failed_create');
    }
}
