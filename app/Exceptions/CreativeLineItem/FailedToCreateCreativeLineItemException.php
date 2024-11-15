<?php

namespace App\Exceptions\CreativeLineItem;

use App\Exceptions\BusinessLogicException;

class FailedToCreateCreativeLineItemException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_CREATIVE_LINE_ITEM;
    }

    public function getStatusMessage(): string
    {
        return __('errors.creative_line_item.failed_create');
    }
}
