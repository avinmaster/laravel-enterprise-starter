<?php

namespace App\Exceptions\CreativeLineItem;

use App\Exceptions\BusinessLogicException;

class CreativeLineItemDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::CREATIVE_LINE_ITEM_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.creative_line_item.does_not_exist');
    }
}
