<?php

namespace App\Http\Requests\TargetingExpression;

use Illuminate\Foundation\Http\FormRequest;

class GetTargetingExpressionRequest extends FormRequest
{
    public const ID = 'id';

    public function getId(): string
    {
        return $this->route(self::ID);
    }
}
