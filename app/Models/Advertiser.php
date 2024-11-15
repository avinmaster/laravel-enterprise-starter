<?php

namespace App\Models;

use App\Constants\Advertiser\AdvertiserConstants;
use App\Services\Advertiser\DTO\CreateAdvertiserDTO;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * App\Models\Advertiser
 *
 * @property string $id
 * @property string $user_id
 * @property string $name
 * @property string $domain
 * @property string $app_bundle
 * @property string|null $alternative_id
 * @property string|null $notes
 * @property bool|null $active
 * @property string $default_currency
 * @property string $default_continent
 * @property string $category_id
 * @property string $default_click_url
 * @property string|null $default_campaign_preset
 * @property string|null $default_creative_thumbnail_url
 * @property string|null $default_line_item_preset
 * @property string|null $default_targeting_preset
 * @property bool|null $is_comcast_segment_eligible
 * @property string|null $skad_mmp
 * @property string $created_at
 * @property string $updated_at
 */
class Advertiser extends Model implements HasMedia
{
    use HasFactory;
    use HasUuids;
    use InteractsWithMedia;
    use SoftDeletes;

    public const RELATIONS = [
        'defaultImage',
        'campaigns',
        'creatives',
    ];

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'domain',
        'app_bundle',
        'alternative_id',
        'notes',
        'default_currency',
        'default_continent',
        'category_id',
        'default_click_url',
        'active',
        'default_campaign_preset',
        'default_creative_thumbnail_url',
        'default_line_item_preset',
        'default_targeting_preset',
        'is_comcast_segment_eligible',
        'skad_mmp',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public static function createModel(CreateAdvertiserDTO $dto): array
    {
        return [
            'user_id' => $dto->user_id,
            'name' => $dto->name,
            'domain' => $dto->domain,
            'app_bundle' => $dto->app_bundle,
            'alternative_id' => $dto->alternative_id,
            'notes' => $dto->notes,
            'default_currency' => $dto->default_currency,
            'default_continent' => $dto->default_continent,
            'category_id' => $dto->category_id,
            'default_click_url' => $dto->default_click_url,
            'active' => $dto->active,
            'default_campaign_preset' => $dto->default_campaign_preset,
            'default_creative_thumbnail_url' => $dto->default_creative_thumbnail_url,
            'default_line_item_preset' => $dto->default_line_item_preset,
            'default_targeting_preset' => $dto->default_targeting_preset,
            'is_comcast_segment_eligible' => $dto->is_comcast_segment_eligible,
            'skad_mmp' => $dto->skad_mmp,
        ];
    }

    public function defaultImage(): MorphOne
    {
        return $this->morphOne(Media::class, 'model')
            ->where('collection_name', AdvertiserConstants::DEFAULT_CREATIVE_THUMB);
    }

    public function campaigns(): HasMany
    {
        return $this->hasMany(Campaign::class, 'advertiser_id');
    }

    public function creatives(): HasMany
    {
        return $this->hasMany(Creative::class, 'advertiser_id');
    }
}
