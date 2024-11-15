<?php

namespace App\Exceptions\TargetingExpressionModule;

use App\Exceptions\BusinessLogicException;

class FailedToInsertTargetingExpressionModuleException extends BusinessLogicException
{
    public function getStatus(): int
    {
        return BusinessLogicException::FAILED_TO_INSERT_TARGETING_EXPRESSION_MODULES;
    }

    public function getStatusMessage(): string
    {
        return __('errors.targeting_expression_module.failed_insert');
    }
}
