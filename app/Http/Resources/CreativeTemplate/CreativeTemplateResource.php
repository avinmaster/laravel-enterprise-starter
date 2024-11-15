<?php

namespace App\Http\Resources\CreativeTemplate;

use Illuminate\Http\Resources\Json\JsonResource;

class CreativeTemplateResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'creative_type' => $this->resource->creative_type,
            'is_video' => $this->resource->is_video,
            'active' => $this->resource->active,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
