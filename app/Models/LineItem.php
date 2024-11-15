<?php

namespace App\Models;

use App\Services\LineItem\DTO\CreateLineItemDTO;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

/**
 * App\Models\LineItem
 *
 * @property string $id
 * @property string $user_id
 * @property string $advertiser_id
 * @property string $campaign_id
 * @property string $name
 * @property string|null $alternative_id
 * @property bool $active
 * @property bool|null $favorite
 * @property string|null $notes
 * @property string|null $currency
 * @property int $type
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $targeting_expression_id
 * @property int|null $budget_type
 * @property float|null $spend_budget_lifetime
 * @property float|null $spend_budget_daily
 * @property int|null $impressions_budget_lifetime
 * @property int|null $impressions_budget_daily
 * @property string|null $revenue_type
 * @property float|null $revenue_amount
 * @property string|null $bid_modifier_id
 * @property string|null $delivery_modifier_id
 * @property float|null $min_bid
 * @property float|null $max_bid
 * @property string $bidding_strategy
 * @property array $bidding_values
 * @property string|null $bid_shading_control
 * @property bool|null $bidding_custom
 * @property string|null $bidding_pacing
 * @property string|null $frequency_caps_id_type
 * @property bool|null $frequency_caps_use_fallback
 * @property array|null $frequency_caps_limits
 * @property string|null $frequency_caps_id_vendor
 * @property string|null $frequency_caps_id_vendor_id
 * @property array|null $user_timezones
 * @property string|null $segment_extension_type
 * @property string|null $segment_type
 * @property array|null $segment_vendors
 * @property array|null $event_ids
 * @property string|null $ghost_bidding_id_type
 * @property string|null $ghost_bidding_id_vendor
 * @property string|null $ghost_bidding_id_vendor_id
 * @property string|null $budget_carry_over_type
 * @property bool|null $enable_skad_tracking
 * @property string|null $skad_assignment_level
 * @property bool|null $target_skad
 * @property bool|null $guaranteed
 * @property string $created_at
 * @property string $updated_at
 */
class LineItem extends Model
{
    use HasUuids;
    use SoftDeletes;

    public const RELATIONS = [
        'associatedCreatives',
        'flights',
    ];

    protected $fillable = [
        'id',
        'user_id',
        'advertiser_id',
        'campaign_id',
        'name',
        'alternative_id',
        'active',
        'favorite',
        'notes',
        'currency',
        'type',
        'start_date',
        'end_date',
        'targeting_expression_id',
        'budget_type',
        'spend_budget_lifetime',
        'spend_budget_daily',
        'impressions_budget_lifetime',
        'impressions_budget_daily',
        'revenue_type',
        'revenue_amount',
        'bid_modifier_id',
        'delivery_modifier_id',
        'min_bid',
        'max_bid',
        'bidding_strategy',
        'bidding_values',
        'bid_shading_control',
        'bidding_custom',
        'bidding_pacing',
        'frequency_caps_id_type',
        'frequency_caps_use_fallback',
        'frequency_caps_limits',
        'frequency_caps_id_vendor',
        'frequency_caps_id_vendor_id',
        'user_timezones',
        'segment_type',
        'segment_extension_type',
        'segment_vendors',
        'event_ids',
        'ghost_bidding_id_type',
        'ghost_bidding_id_vendor',
        'ghost_bidding_id_vendor_id',
        'budget_carry_over_type',
        'enable_skad_tracking',
        'skad_assignment_level',
        'target_skad',
        'guaranteed',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public static function createModel(createLineItemDTO $dto): array
    {
        return [
            'id' => Str::uuid()->toString(),
            'user_id' => $dto->user_id,
            'advertiser_id' => $dto->advertiser_id,
            'campaign_id' => $dto->campaign_id,
            'name' => $dto->name,
            'alternative_id' => $dto->alternative_id,
            'active' => $dto->active,
            'favorite' => $dto->favorite,
            'notes' => $dto->notes,
            'currency' => $dto->currency,
            'type' => $dto->type,
            'start_date' => $dto->start_date,
            'end_date' => $dto->end_date,
            'budget_type' => $dto->budget_type,
            'spend_budget_lifetime' => $dto->spend_budget_lifetime,
            'spend_budget_daily' => $dto->spend_budget_daily,
            'impressions_budget_lifetime' => $dto->impressions_budget_lifetime,
            'impressions_budget_daily' => $dto->impressions_budget_daily,
            'revenue_type' => $dto->revenue_type,
            'revenue_amount' => $dto->revenue_amount,
            'bid_modifier_id' => $dto->bid_modifier_id,
            'delivery_modifier_id' => $dto->delivery_modifier_id,
            'min_bid' => $dto->min_bid,
            'max_bid' => $dto->max_bid,
            'bidding_strategy' => $dto->bidding_strategy,
            'bidding_values' => json_encode($dto->bidding_values),
            'bid_shading_control' => $dto->bid_shading_control,
            'bidding__custom' => $dto->bidding_custom,
            'bidding_pacing' => $dto->bidding_pacing,
            'frequency_caps_id_type' => $dto->frequency_caps_id_type,
            'frequency_caps_use_fallback' => $dto->frequency_caps_use_fallback,
            'frequency_caps_limits' => json_encode($dto->frequency_caps_limits),
            'frequency_caps_id_vendor' => $dto->frequency_caps_id_vendor,
            'frequency_caps_id_vendor_id' => $dto->frequency_caps_id_vendor_id,
            'user_timezones' => json_encode($dto->user_timezones),
            'segment_extension_type' => $dto->segment_extension_type,
            'segment_type' => $dto->segment_type,
            'segment_vendors' => json_encode($dto->segment_vendors),
            'event_ids' => json_encode($dto->event_ids),
            'ghost_bidding_id_type' => $dto->ghost_bidding_id_type,
            'ghost_bidding_id_vendor' => $dto->ghost_bidding_id_vendor,
            'ghost_bidding_id_vendor_id' => $dto->ghost_bidding_id_vendor_id,
            'budget_carry_over_type' => $dto->budget_carry_over_type,
            'enable_skad_tracking' => $dto->enable_skad_tracking,
            'skad_assignment_level' => $dto->skad_assignment_level,
            'target_skad' => $dto->target_skad,
            'guaranteed' => $dto->guaranteed,
        ];
    }

    public function associatedCreatives(): BelongsToMany
    {
        return $this->belongsToMany(
            Creative::class,
            'creative_line_items',
            'line_item_id',
            'creative_id'
        )
            ->withPivot(CreativeLineItem::PIVOT_COLUMNS);
    }

    public function flights(): HasMany
    {
        return $this->hasMany(LineItemFlight::class, 'line_item_id');
    }
}
