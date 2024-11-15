<?php

namespace App\Exceptions\TargetingExpressionModule;

use App\Exceptions\BusinessLogicException;

class TargetingExpressionModuleDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::TARGETING_EXPRESSION_MODULE_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.targeting_expression_module.does_not_exist');
    }
}
