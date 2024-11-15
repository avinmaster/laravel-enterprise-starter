<?php

namespace App\Exceptions\TargetingExpression;

use App\Exceptions\BusinessLogicException;

class FailedToCreateTargetingExpressionException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_CREATE_TARGETING_EXPRESSION;
    }

    public function getStatusMessage(): string
    {
        return __('errors.targeting_expression.failed_create');
    }
}
