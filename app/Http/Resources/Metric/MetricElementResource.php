<?php

namespace App\Http\Resources\Metric;

use Illuminate\Http\Resources\Json\JsonResource;

class MetricElementResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            "today" => 0,
            "past_7_days" => 0,
            "past_30_days" => 0,
            "lifetime" => 0,
            "yesterday" => 0,
        ];
    }
}
