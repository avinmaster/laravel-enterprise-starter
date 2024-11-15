<?php

namespace App\Http\Resources\List;

use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'type' => $this->resource->type,
            'active' => $this->resource->active,
            'alternative_id' => $this->resource->alternative_id,
            'notes' => $this->resource->notes,
            'attributes' => json_decode($this->resource->attributes),
            'upload_type' => $this->resource->upload_type,
            'delimiter' => $this->resource->delimiter,
        ];
    }
}
