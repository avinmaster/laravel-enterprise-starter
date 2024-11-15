<?php

namespace App\Http\Requests\LineItem;

use Illuminate\Foundation\Http\FormRequest;

class GetLineItemRequest extends FormRequest
{
    public const LINE_ITEM_ID = 'line_item_id';

    public function getLineItemId(): string
    {
        return $this->route(self::LINE_ITEM_ID);
    }
}
