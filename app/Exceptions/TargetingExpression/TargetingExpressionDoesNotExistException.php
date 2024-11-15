<?php

namespace App\Exceptions\TargetingExpression;

use App\Exceptions\BusinessLogicException;

class TargetingExpressionDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::TARGETING_EXPRESSION_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.targeting_expression.does_not_exist');
    }
}
