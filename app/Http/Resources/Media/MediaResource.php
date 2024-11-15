<?php

namespace App\Http\Resources\Media;

use Illuminate\Http\Resources\Json\JsonResource;

class MediaResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->uuid,
            'name' => $this->resource->name,
            'file_name' => $this->resource->file_name,
            'mime_type' => $this->resource->mime_type,
            'original_url' => $this->resource->original_url,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at
        ];
    }
}
