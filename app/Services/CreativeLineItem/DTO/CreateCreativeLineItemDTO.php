<?php

namespace App\Services\CreativeLineItem\DTO;

use App\Http\Requests\CreativeLineItem\CreateCreativeLineItemRequest;
use Spatie\LaravelData\Data;

class CreateCreativeLineItemDTO extends Data
{
    public string $user_id;
    public string $line_item_id;
    public string $creative_id;
    public ?bool $active;
    public ?int $weight;
    public ?string $start_date;
    public ?string $end_date;

    public static function fromRequest(CreateCreativeLineItemRequest $request): self
    {
        return self::from([
            'user_id' => $request->user()->id,
            'line_item_id' => $request->getLineItemId(),
            'creative_id' => $request->getCreativeId(),
            'active' => $request->getActive(),
            'weight' => $request->getWeight(),
            'start_date' => $request->getStartDate(),
            'end_date' => $request->getEndDate(),
        ]);
    }
}
