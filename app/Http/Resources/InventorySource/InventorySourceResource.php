<?php

namespace App\Http\Resources\InventorySource;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class InventorySourceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'id' => $this->resource->id,
            'account_viewable' => $this->resource->account_viewable,
            'default_viewable' => $this->resource->default_viewable,
            'viewable' => $this->resource->viewable,
            'super_user_only' => $this->resource->super_user_only,
            'active' => $this->resource->active,
            'name' => $this->resource->name,
            'key' => $this->resource->key,
            'mobile_app' => $this->resource->mobile_app,
            'mobile_web' => $this->resource->mobile_web,
            'video' => $this->resource->video,
            'desktop' => $this->resource->desktop,
            'mobile_native' => $this->resource->mobile_native,
            'desktop_native' => $this->resource->desktop_native,
            'other' => $this->resource->other,
            'category' => $this->resource->category,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
