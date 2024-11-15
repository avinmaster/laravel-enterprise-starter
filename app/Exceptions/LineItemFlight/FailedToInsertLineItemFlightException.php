<?php

namespace App\Exceptions\LineItemFlight;

use App\Exceptions\BusinessLogicException;

class FailedToInsertLineItemFlightException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_INSERT_LINE_ITEM_FLIGHT;
    }

    public function getStatusMessage(): string
    {
        return __('errors.line_item_flight.failed_insert');
    }
}
