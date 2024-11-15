<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Services\Campaign\DTO\CreateCampaignDTO;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

/**
 * App\Models\Campaign
 *
 * @property string $id
 * @property string $user_id
 * @property string $advertiser_id
 * @property string $name
 * @property string|null $alternative_id
 * @property bool $active
 * @property bool|null $favorite
 * @property string|null $notes
 * @property string|null $currency
 * @property string|null $campaign_preset
 * @property string|null $default_line_item_preset
 * @property string|null $default_targeting_preset
 * @property bool|null $custom_event_association
 * @property string|null $start_date
 * @property string|null $end_date
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
 * @property string|null $ghost_bidding_id_type
 * @property string|null $ghost_bidding_id_vendor
 * @property string|null $ghost_bidding_id_vendor_id
 * @property string|null $frequency_caps_id_type
 * @property bool|null $frequency_caps_use_fallback
 * @property array|null $frequency_caps_limits
 * @property string|null $frequency_caps_id_vendor
 * @property string|null $frequency_caps_id_vendor_id
 * @property array|null $continents
 * @property array|null $event_ids
 * @property string|null $segment_extension_type
 * @property string|null $segment_type
 * @property array|null $segment_vendors
 * @property bool|null $enable_skad_tracking
 * @property string $created_at
 * @property string $updated_at
 */
class Campaign extends Model
{
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'user_id',
        'advertiser_id',
        'name',
        'alternative_id',
        'active',
        'favorite',
        'notes',
        'currency',
        'campaign_preset',
        'default_line_item_preset',
        'default_targeting_preset',
        'custom_event_association',
        'start_date',
        'end_date',
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
        'ghost_bidding_id_type',
        'ghost_bidding_id_vendor',
        'ghost_bidding_id_vendor_id',
        'frequency_caps_id_type',
        'frequency_caps_use_fallback',
        'frequency_caps_limits',
        'frequency_caps_id_vendor',
        'frequency_caps_id_vendor_id',
        'continents',
        'event_ids',
        'segment_extension_type',
        'segment_type',
        'segment_vendors',
        'enable_skad_tracking',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // relations
    public const RELATIONS = [
        'lineItems',
    ];

    public static function createModel(CreateCampaignDTO $dto): array
    {
        return [
            'user_id' => $dto->user_id,
            'advertiser_id' => $dto->advertiser_id,
            'name' => $dto->name,
            'alternative_id' => $dto->alternative_id,
            'active' => $dto->active,
            'favorite' => $dto->favorite,
            'notes' => $dto->notes,
            'currency' => $dto->currency,
            'campaign_preset' => $dto->campaign_preset,
            'default_line_item_preset' => $dto->default_line_item_preset,
            'default_targeting_preset' => $dto->default_targeting_preset,
            'custom_event_association' => $dto->custom_event_association,
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
            'ghost_bidding_id_type' => $dto->ghost_bidding_id_type,
            'ghost_bidding_id_vendor' => $dto->ghost_bidding_id_vendor,
            'ghost_bidding_id_vendor_id' => $dto->ghost_bidding_id_vendor_id,
            'frequency_caps_id_type' => $dto->frequency_caps_id_type,
            'frequency_caps_use_fallback' => $dto->frequency_caps_use_fallback,
            'frequency_caps_limits' => json_encode($dto->frequency_caps_limits),
            'frequency_caps_id_vendor' => $dto->frequency_caps_id_vendor,
            'frequency_caps_id_vendor_id' => $dto->frequency_caps_id_vendor_id,
            'continents' => json_encode($dto->continents),
            'event_ids' => json_encode($dto->event_ids),
            'segment_extension_type' => $dto->segment_extension_type,
            'segment_type' => $dto->segment_type,
            'segment_vendors' => json_encode($dto->segment_vendors),
            'enable_skad_tracking' => $dto->enable_skad_tracking,
        ];
    }

    public function lineItems(): HasMany
    {
        return $this->hasMany(LineItem::class);
    }
}
