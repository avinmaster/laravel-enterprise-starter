<?php

namespace App\Http\Resources\LineItem;

use App\Http\Resources\Creative\CreativeResource;
use App\Http\Resources\CreativeLineItem\CreativeLineItemPivotResource;
use App\Http\Resources\LineItemFlight\LineItemFlightResource;
use App\Http\Resources\Metric\MetricResource;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class LineItemResource extends JsonResource
{
    public function toArray($request): array
    {
        $budgetRemaining = $this->getBudgetRemaining();
        $deliveryStatus = $this->getDeliveryStatus();
        $daysRemaining = $this->calculateDaysRemaining($this->resource->end_date);
        $onScheduleIndicator = $this->calculateOnScheduleIndicator();
        [$activeFlights, $pastFlights] = $this->getFlights();

        $data = [
            'id' => $this->resource->id,
            'user_id' => $this->resource->user_id,
            'advertiser_id' => $this->resource->advertiser_id,
            'campaign_id' => $this->resource->campaign_id,
            'name' => $this->resource->name,
            'alternative_id' => $this->resource->alternative_id,
            'active' => $this->resource->active,
            'favorite' => $this->resource->favorite,
            'notes' => $this->resource->notes,
            'currency' => $this->resource->currency,
            'type' => $this->resource->type,
            'start_date' => $this->resource->start_date,
            'end_date' => $this->resource->end_date,
            'targeting_expression_id' => $this->resource->targeting_expression_id,
            'budget_type' => $this->resource->budget_type,
            'spend_budget_lifetime' => +$this->resource->spend_budget_lifetime,
            'spend_budget_daily' => +$this->resource->spend_budget_daily,
            'impressions_budget_lifetime' => $this->resource->impressions_budget_lifetime,
            'impressions_budget_daily' => $this->resource->impressions_budget_daily,
            'revenue_type' => $this->resource->revenue_type,
            'revenue_amount' => +$this->resource->revenue_amount,
            'bid_modifier_id' => $this->resource->bid_modifier_id,
            'delivery_modifier_id' => $this->resource->delivery_modifier_id,
            'min_bid' => +$this->resource->min_bid,
            'max_bid' => +$this->resource->max_bid,
            'bidding_strategy' => $this->resource->bidding_strategy,
            'bidding_values' => json_decode($this->resource->bidding_values),
            'bid_shading_control' => $this->resource->bid_shading_control,
            'bidding_pacing' => $this->resource->bidding_pacing,
            'bidding_custom' => $this->resource->bidding_custom,
            'frequency_caps_id_type' => $this->resource->frequency_caps_id_type,
            'frequency_caps_use_fallback' => $this->resource->frequency_caps_use_fallback,
            'frequency_caps_limits' => json_decode($this->resource->frequency_caps_limits),
            'frequency_caps_id_vendor' => $this->resource->frequency_caps_id_vendor,
            'frequency_caps_id_vendor_id' => $this->resource->frequency_caps_id_vendor_id,
            'user_timezones' => json_decode($this->resource->user_timezones),
            'segment_type' => $this->resource->segment_type,
            'segment_extension_type' => $this->resource->segment_extension_type,
            'segment_vendors' => json_decode($this->resource->segment_vendors),
            'event_ids' => json_decode($this->resource->event_ids),
            'ghost_bidding_id_type' => $this->resource->ghost_bidding_id_type,
            'ghost_bidding_id_vendor' => $this->resource->ghost_bidding_id_vendor,
            'ghost_bidding_id_vendor_id' => $this->resource->ghost_bidding_id_vendor_id,
            'budget_carry_over_type' => $this->resource->budget_carry_over_type,
            'enable_skad_tracking' => $this->resource->enable_skad_tracking,
            'skad_assignment_level' => $this->resource->skad_assignment_level,
            'target_skad' => $this->resource->target_skad,
            'guaranteed' => $this->resource->guaranteed,

            'active_flights' => $activeFlights,
            'past_flights' => $pastFlights,
            'metrics' => new MetricResource($this),
            'delivery_status' => $deliveryStatus,
            'days_remaining' => $daysRemaining,
            'budget_remaining' => $budgetRemaining,
            'osi' => $onScheduleIndicator,
            'associated_creatives' => CreativeResource::collection($this->whenLoaded('associatedCreatives')),
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];

        if ($this->resource->pivot) {
            $data['pivot'] = new CreativeLineItemPivotResource($this);
        }

        return $data;
    }

    private function getBudgetRemaining(): int|float
    {
        return 0;
    }

    private function getDeliveryStatus(): string
    {
        return 'not_bidding';   // winning | not_winning
    }

    private function calculateDaysRemaining(?string $end_date): ?float
    {
        if ($end_date === null) {
            return null;
        }

        if (!str_contains($end_date, ' ')) {
            $endDate = Carbon::createFromFormat('Y-m-d', $end_date)->startOfDay();
        } else {
            $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $end_date);
        }

        $timeDifference = $endDate->diffInSeconds(Carbon::now());

        if ($timeDifference < 0) {
            $daysRemaining = 0;
        } else {
            $daysRemaining = floor($timeDifference / (3600 * 24));
            $remainingSeconds = $timeDifference % (3600 * 24);
            $remainingFraction = $remainingSeconds / (3600 * 24);

            $daysRemaining += $remainingFraction;
        }

        return round(abs($daysRemaining), 2);
    }

    private function calculateOnScheduleIndicator(): float
    {
        return 0;
    }

    private function getFlights(): array
    {
        $flightsCollection = LineItemFlightResource::collection($this->whenLoaded('flights'));

        $activeFlights = [];
        $pastFlights = [];

        if ($flightsCollection->collection) {
            foreach ($flightsCollection as $flight) {
                if (
                    !$flight->end_date ||
                    $flight->end_date >= now()
                ) {
                    $activeFlights[] = $flight;
                } else {
                    $pastFlights[] = $flight;
                }
            }
        }

        return [
            $activeFlights,
            $pastFlights
        ];
    }
}
