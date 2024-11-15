<?php

namespace App\Services\Creative\DTO;

use App\Http\Requests\Creative\IndexCreativeRequest;
use App\Services\DTO\PaginationParamsDTO;
use Spatie\LaravelData\Data;

class IndexCreativeDTO extends Data
{
    public string $user_id;
    public ?bool $with_trashed;
    public PaginationParamsDTO $pagination;

    public static function fromRequest(IndexCreativeRequest $request): self
    {
        return self::from([
            'user_id' => $request->user()->id,
            'with_trashed' => $request->getWithTrashed(),
            'pagination' => new PaginationParamsDTO(
                $request->getPage(),
                $request->getPerPage()
            )
        ]);
    }
}
