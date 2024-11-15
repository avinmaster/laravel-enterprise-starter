<?php

namespace App\Services\LineItem\DTO;

use App\Http\Requests\LineItem\IndexLineItemRequest;
use App\Services\DTO\PaginationParamsDTO;
use Spatie\LaravelData\Data;

class IndexLineItemDTO extends Data
{
    public PaginationParamsDTO $pagination;
    public string $user_id;

    public static function fromRequest(IndexLineItemRequest $request): self
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
