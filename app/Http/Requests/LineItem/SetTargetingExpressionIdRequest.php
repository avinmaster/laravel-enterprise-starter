<?php

namespace App\Http\Requests\LineItem;

use Illuminate\Foundation\Http\FormRequest;

class SetTargetingExpressionIdRequest extends FormRequest
{
    public const LINE_ITEM_ID = 'line_item_id';
    public const TARGETING_EXPRESSION_ID = 'targeting_expression_id';

    public function getLineItemId(): string
    {
        return $this->route(self::LINE_ITEM_ID);
    }

    public function getTargetingExpressionId(): string
    {
        return $this->get(self::TARGETING_EXPRESSION_ID);
    }
}
