<?php

namespace App\Http\Resources\TargetingExpression;

use App\Http\Resources\TargetingExpressionModule\TargetingExpressionModuleResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TargetingExpressionResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'name' => $this->resource->name,
            'active' => $this->resource->active,
            'alternative_id' => $this->resource->alternative_id,
            'notes' => $this->resource->notes,
            'guaranteed' => $this->resource->guaranteed,
            'modules' => TargetingExpressionModuleResource::collection($this->whenLoaded('modules')),
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
