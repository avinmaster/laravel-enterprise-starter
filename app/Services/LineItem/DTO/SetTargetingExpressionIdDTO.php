<?php

namespace App\Services\LineItem\DTO;

use App\Http\Requests\LineItem\SetTargetingExpressionIdRequest;
use Spatie\LaravelData\Data;

class SetTargetingExpressionIdDTO extends Data
{
    public string $line_item_id;
    public string $targeting_expression_id;

    public static function fromRequest(SetTargetingExpressionIdRequest $request): self
    {
        return self::from([
            "line_item_id" => $request->getLineItemId(),
            "targeting_expression_id" => $request->getTargetingExpressionId(),
        ]);
    }
}
