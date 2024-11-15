<?php

namespace App\Services\CampaignCreative\DTO;

use Spatie\LaravelData\Data;
use App\Services\DTO\PaginationParamsDTO;
use App\Http\Requests\CampaignCreative\IndexCampaignCreativeRequest;

class IndexCampaignCreativeDTO extends Data
{
    public PaginationParamsDTO $pagination;
    public string $user_id;

    public static function fromRequest(IndexCampaignCreativeRequest $request): self
    {
        return self::from([
            'user_id' => request()->user()->id,
            'pagination' => new PaginationParamsDTO(
                $request->getPage(), $request->getPerPage()
            )
        ]);
    }
}
