<?php

namespace App\Services\DeliveryModifierTerm\UseCases;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class GetDeliveryModifierTermDataUseCase
{
    public function run(array $data, string $deliveryModifierId): array
    {
        $terms = [];
        $targetings = [];
        foreach ($data as $term) {
            $termId = Str::uuid()->toString();
            $terms[] = [
                'id' => $termId,
                'rank' => $term['rank'],
                'weight' => $term['weight'],
                'delivery_modifier_id' => $deliveryModifierId,
                'budget_cap_percentage' => $term['budget_cap_percentage'] ?? null,
                'created_at' => Carbon::now('UTC')
            ];

            foreach ($term['targeting'] as $targeting) {
                $targetings[] = [
                    'id' => Str::uuid()->toString(),
                    'key' => $targeting['key'],
                    'value' => $targeting['value'] ?? null,
                    'comparator' => $targeting['comparator'],
                    'expand_list' => $targeting['expand_list'] ?? null,
                    'created_at' => Carbon::now('UTC'),
                    'delivery_modifier_id' => $deliveryModifierId,
                    'delivery_modifier_term_id' => $termId
                ];
            }
        }

        return [
            'terms' => $terms,
            'targetings' => $targetings,
        ];
    }
}
