<?php

namespace App\Models;

use Elastic\Elasticsearch\ClientBuilder;
use Elastic\Elasticsearch\Exception\AuthenticationException;
use Elastic\Elasticsearch\Exception\ClientResponseException;
use Elastic\Elasticsearch\Exception\MissingParameterException;
use Elastic\Elasticsearch\Exception\ServerResponseException;
use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Ad
 *
 * @property string $id
 * @property bool $active
 * @property int $type
 * @property float $cpm_bid
 * @property string $currency
 * @property array $advertiser
 * @property array $campaign
 * @property array $line_item
 * @property array $creative
 * @property array $targeting_include
 * @property array $targeting_exclude
 * @property string $created_at
 * @property string $updated_at
 */
class Ad extends Model
{
    use HasFactory;
    use HasUuids;
    use Searchable;

    protected $fillable = [
        'active',
        'type',
        'cpm_bid',
        'currency',
        'advertiser',
        'campaign',
        'line_item',
        'creative',
        'targeting_include',
        'targeting_exclude',
        'created_at',
        'updated_at',
    ];

    public function toSearchableArray(): array
    {
        return [
            'active' => $this->active,
            'type' => $this->type,
            'cpm_bid' => $this->cpm_bid,
            'currency' => $this->currency,
            'advertiser' => json_decode($this->advertiser),
            'campaign' => json_decode($this->campaign),
            'line_item' => json_decode($this->line_item),
            'creative' => json_decode($this->creative),
            'targeting_include' => json_decode($this->targeting_include),
            'targeting_exclude' => json_decode($this->targeting_exclude),
        ];
    }

    /**
     * @throws AuthenticationException
     * @throws ClientResponseException
     * @throws ServerResponseException
     * @throws MissingParameterException
     */
    protected static function boot(): void
    {
        parent::boot();

        static::saved(function ($model) {
            $model->searchable();
        });

        $mapping = config('elastic.mapping.ads');

        $elasticClient = ClientBuilder::create()->build();

        $existingIndices = $elasticClient->indices()->getAlias()->asArray();

        if (!array_key_exists("ads", $existingIndices)) {
            $elasticClient->indices()->create(['index' => 'ads']);
        }

        $elasticClient->indices()->putMapping([
            'index' => (new static)->searchableAs(),
            'body' => [
                'properties' => $mapping,
            ],
        ]);
    }
}
