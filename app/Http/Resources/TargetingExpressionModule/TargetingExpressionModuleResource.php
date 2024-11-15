<?php

namespace App\Http\Resources\TargetingExpressionModule;

use Illuminate\Http\Resources\Json\JsonResource;

class TargetingExpressionModuleResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'module' => $this->resource->module,
            'key' => $this->resource->key,
            'operator' => $this->resource->operator,
            'comparator' => $this->resource->comparator,
            'value' => $this->resource->value,
        ];
    }
}
