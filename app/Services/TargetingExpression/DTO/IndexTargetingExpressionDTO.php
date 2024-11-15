<?php

namespace App\Services\TargetingExpression\DTO;

use App\Http\Requests\TargetingExpression\IndexTargetingExpressionRequest;
use App\Services\DTO\PaginationParamsDTO;
use Spatie\LaravelData\Data;

class IndexTargetingExpressionDTO extends Data
{
    public PaginationParamsDTO $pagination;
    public string $user_id;

    public static function fromRequest(IndexTargetingExpressionRequest $request): self
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
