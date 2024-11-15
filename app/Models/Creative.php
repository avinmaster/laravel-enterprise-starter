<?php

namespace App\Models;

use App\Constants\Creative\CreativeConstants;
use App\Services\Creative\DTO\CreateCreativeDTO;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * App\Models\Creative
 *
 * @property string $id
 * @property string $user_id
 * @property string $advertiser_id
 * @property string $name
 * @property int $type
 * @property int $width
 * @property int $height
 * @property string $ad_markup
 * @property bool $sizeless
 * @property bool $secure
 * @property string $click_url
 * @property string $native_offer
 * @property string $content_tag
 * @property string $template_id
 * @property string $rule_id
 * @property string $rule_key
 * @property array $pixels
 * @property array $scripts
 * @property string $thumbnail_url
 * @property string $start_date
 * @property string $end_date
 * @property string $alternative_id
 * @property string $notes
 * @property bool $active
 * @property string $created_at
 * @property string $updated_at
 */
class Creative extends Model implements HasMedia
{
    use HasFactory;
    use HasUuids;
    use InteractsWithMedia;
    use SoftDeletes;

    public const RELATIONS = [
        'creativeAddons',
        'technicalVendors',
        'primaryAsset',
        'secondaryAsset',
        'associatedLineItems',
    ];

    protected $fillable = [
        'id',
        'user_id',
        'advertiser_id',
        'name',
        'type',
        'width',
        'height',
        'ad_markup',
        'sizeless',
        'secure',
        'click_url',
        'native_offer',
        'content_tag',
        'template_id',
        'rule_id',
        'rule_key',
        'pixels',
        'scripts',
        'thumbnail_url',
        'start_date',
        'end_date',
        'alternative_id',
        'notes',
        'active',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public static function createModel(createCreativeDTO $dto): array
    {
        return [
            'user_id' => $dto->user_id,
            'advertiser_id' => $dto->advertiser_id,
            'name' => $dto->name,
            'type' => $dto->type,
            'width' => $dto->width,
            'height' => $dto->height,
            'ad_markup' => $dto->ad_markup,
            'sizeless' => $dto->sizeless,
            'secure' => $dto->secure,
            'click_url' => $dto->click_url,
            'native_offer' => $dto->native_offer,
            'content_tag' => $dto->content_tag,
            'template_id' => $dto->template_id,
            'rule_id' => $dto->rule_id,
            'rule_key' => $dto->rule_key,
            'pixels' => json_encode($dto->pixels),
            'scripts' => json_encode($dto->scripts),
            'thumbnail_url' => $dto->thumbnail_url,
            'start_date' => $dto->start_date,
            'end_date' => $dto->end_date,
            'alternative_id' => $dto->alternative_id,
            'active' => $dto->active,
        ];
    }

    public function creativeAddons(): BelongsToMany
    {
        return $this->belongsToMany(
            CreativeAddon::class,
            'creative_creative_addons',
            'creative_id',
            'creative_addon_id'
        );
    }

    public function technicalVendors(): BelongsToMany
    {
        return $this->belongsToMany(
            TechnicalVendor::class,
            'creative_technical_vendors',
            'creative_id',
            'technical_vendor_id'
        );
    }

    public function primaryAsset(): MorphOne
    {
        return $this->morphOne(Media::class, 'model')
            ->where('collection_name', CreativeConstants::CREATIVE_PRIMARY_ASSET);
    }

    public function secondaryAsset(): MorphOne
    {
        return $this->morphOne(Media::class, 'model')
            ->where('collection_name', CreativeConstants::CREATIVE_SECONDARY_ASSET);
    }

    public function associatedLineItems(): BelongsToMany
    {
        return $this->belongsToMany(
            LineItem::class,
            'creative_line_items',
            'creative_id',
            'line_item_id'
        )
            ->withPivot(CreativeLineItem::PIVOT_COLUMNS);
    }
}
