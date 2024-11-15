<?php

namespace App\Http\Resources\User;

use App\Http\Resources\Media\MediaResource;
use App\Http\Resources\Team\TeamResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'                => $this->resource->id,
            'first_name'        => $this->resource->first_name,
            'last_name'         => $this->resource->last_name,
            'email'             => $this->resource->email,
            'status'            => $this->resource->status,
            'phone'             => $this->resource->phone,
            'created_at'        => $this->resource->created_at,
            'updated_at'        => $this->resource->updated_at,
            'teams'             => TeamResource::collection($this->whenLoaded('teams')),
            'profile_photo'     => new MediaResource($this->whenLoaded('profilePhoto')),
        ];
    }
}
