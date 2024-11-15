<?php

namespace App\Http\Resources\Team;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'                => $this->resource->id,
            'owner_id'          => $this->resource->owner_id,
            'parent_team_id'    => $this->resource->parent_team_id,
            'name'              => $this->resource->name,
            'created_at'        => $this->resource->created_at,
            'updated_at'        => $this->resource->updated_at,
        ];
    }
}
