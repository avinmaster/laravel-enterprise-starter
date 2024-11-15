<?php

namespace App\Http\Resources\UserInvitation;

use Illuminate\Http\Resources\Json\JsonResource;

class UserInvitationResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'            => $this->resource->id,
            'sender_id'     => $this->resource->sender_id,
            'email'         => $this->resource->email,
            'hash'          => $this->resource->hash,
            'status'        => $this->resource->status,
            'created_at'    => $this->resource->created_at,
            'updated_at'    => $this->resource->updated_at,
        ];
    }
}
