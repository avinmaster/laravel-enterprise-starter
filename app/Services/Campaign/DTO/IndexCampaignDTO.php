<?php

namespace App\Services\Campaign\DTO;

use Spatie\LaravelData\Data;
use App\Services\DTO\PaginationParamsDTO;
use App\Http\Requests\Campaign\IndexCampaignRequest;

class IndexCampaignDTO extends Data
{
    public PaginationParamsDTO $pagination;
    public string $user_id;

    public static function fromRequest(IndexCampaignRequest $request): self
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
