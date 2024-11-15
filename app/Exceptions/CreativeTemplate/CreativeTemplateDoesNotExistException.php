<?php

namespace App\Exceptions\CreativeTemplate;

use App\Exceptions\BusinessLogicException;

class CreativeTemplateDoesNotExistException extends BusinessLogicException
{

    public function getStatus(): int
    {
        return BusinessLogicException::CREATIVE_TEMPLATE_DOES_NOT_EXIST;
    }

    public function getStatusMessage(): string
    {
        return __('errors.creative_template.does_not_exist');
    }
}
