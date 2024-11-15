<?php

namespace App\Http\Resources\Metric;

use Illuminate\Http\Resources\Json\JsonResource;

class MetricResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'spend' => new MetricElementResource($this),
            'impressions' => new MetricElementResource($this),
        ];
    }
}
