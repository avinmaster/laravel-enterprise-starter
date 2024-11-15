<?php

namespace App\Services\Creative\DTO;

use App\Http\Requests\Creative\IndexCreativeOfAdvertiserRequest;
use App\Services\DTO\PaginationParamsDTO;
use Spatie\LaravelData\Data;

class IndexCreativeOfAdvertiserDTO extends Data
{
    public string $user_id;
    public ?bool $with_trashed;
    public string $advertiser_id;
    public PaginationParamsDTO $pagination;

    public static function fromRequest(IndexCreativeOfAdvertiserRequest $request): self
    {
        return self::from([
            'user_id' => $request->user()->id,
            'advertiser_id' => $request->getAdvertiserId(),
            'with_trashed' => $request->getWithTrashed(),
            'pagination' => new PaginationParamsDTO(
                $request->getPage(),
                $request->getPerPage()
            )
        ]);
    }
}
