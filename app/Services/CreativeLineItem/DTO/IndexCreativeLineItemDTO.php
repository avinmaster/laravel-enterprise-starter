<?php

namespace App\Services\CreativeLineItem\DTO;

use App\Http\Requests\CreativeLineItem\IndexCreativeLineItemRequest;
use App\Services\DTO\PaginationParamsDTO;
use Spatie\LaravelData\Data;

class IndexCreativeLineItemDTO extends Data
{
    public PaginationParamsDTO $pagination;
    public string $user_id;

    public static function fromRequest(IndexCreativeLineItemRequest $request): self
    {
        return self::from([
            'user_id' => request()->user()->id,
            'pagination' => new PaginationParamsDTO(
                $request->getPage(),
                $request->getPerPage()
            )
        ]);
    }
}
