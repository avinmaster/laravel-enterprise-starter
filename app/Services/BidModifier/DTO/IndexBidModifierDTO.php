<?php

namespace App\Services\BidModifier\DTO;

use Spatie\LaravelData\Data;
use App\Services\DTO\PaginationParamsDTO;
use App\Http\Requests\BidModifier\IndexBidModifierRequest;

class IndexBidModifierDTO extends Data
{
    public string $user_id;
    public PaginationParamsDTO $pagination;

    public static function fromRequest(IndexBidModifierRequest $request): self
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
