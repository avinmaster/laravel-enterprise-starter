<?php

namespace App\Http\Resources\SegmentTree;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class SegmentTreeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'cpm' => $this->resource->cpm,
            'type' => $this->resource->type,
            'key' => $this->resource->key,
            'name' => $this->resource->name,
            'parent_key' => $this->resource->parent_key,
            'alternative_id' => $this->resource->alternative_id,
            'verb_usage' => $this->resource->verb_usage,
            'data_provider_id' => $this->resource->data_provider_id,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
