<?php

namespace App\Services\Events\DTO;

use Spatie\LaravelData\Data;
use App\Services\DTO\PaginationParamsDTO;
use App\Http\Requests\Event\IndexEventRequest;

class IndexEventDTO extends Data
{
    public PaginationParamsDTO $pagination;
    public string $user_id;

    public static function fromRequest(IndexEventRequest $request): self
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
