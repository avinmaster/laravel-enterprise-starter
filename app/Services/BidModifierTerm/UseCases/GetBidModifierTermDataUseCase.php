<?php

namespace App\Services\BidModifierTerm\UseCases;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class GetBidModifierTermDataUseCase
{
    public function run(array $data, string $bidModifierId): array
    {
        $bidModifiers = [];
        foreach ($data as $term) {
            $bidModifiers[] = [
                'id' => Str::uuid()->toString(),
                'bid_modifier_id' => $bidModifierId,
                'recency_start' => $term['recency']['start'],
                'recency_end' => $term['recency']['end'],
                'comparator' => $term['comparator'],
                'multiplier' => $term['multiplier'],
                'override_multiplier' => $term['override_multiplier'],
                'targeting_key' => $term['targeting_key'],
                'value' => $term['value'],
                'created_at' => Carbon::now('UTC')
            ];
        }

        return $bidModifiers;
    }
}
