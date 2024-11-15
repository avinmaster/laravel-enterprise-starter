<?php

namespace App\Exceptions\LineItem;

use App\Exceptions\BusinessLogicException;

class LineItemDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::LINE_ITEM_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.line_item.does_not_exist');
    }
}
