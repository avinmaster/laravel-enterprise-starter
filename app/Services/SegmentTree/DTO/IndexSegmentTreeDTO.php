<?php

namespace App\Services\SegmentTree\DTO;

use App\Http\Requests\SegmentTree\IndexSegmentTreeRequest;
use Spatie\LaravelData\Data;

class IndexSegmentTreeDTO extends Data
{
    public string|null $name;
    public string|null $data_provider_id;
    public string|null $parent_key;

    public static function fromRequest(IndexSegmentTreeRequest $request): self
    {
        return self::from([
            'name' => $request->getName(),
            'data_provider_id' => $request->getDataProviderId(),
            'parent_key' => $request->getParentKey(),
        ]);
    }
}
