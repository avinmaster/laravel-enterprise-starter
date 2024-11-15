<?php

namespace App\Services\Advertiser\DTO;

use Spatie\LaravelData\Data;
use App\Services\DTO\PaginationParamsDTO;
use App\Http\Requests\Advertiser\IndexAdvertiserRequest;

class IndexAdvertiserDTO extends Data
{
    public PaginationParamsDTO $pagination;
    public string $user_id;
    public array $sorts;

    public static function fromRequest(IndexAdvertiserRequest $request): self
    {
        return self::from([
            'user_id' => request()->user()->id,
            'sorts' => $request->getSort(),
            'pagination' => new PaginationParamsDTO(
                $request->getPage(),
                $request->getPerPage()
            )
        ]);
    }
}
