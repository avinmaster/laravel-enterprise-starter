<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SegmentTree extends Model
{
    use HasFactory;

    public const RELATIONS = [
        'dataProvider',
    ];

    protected $fillable = [
        'cpm',
        'type',
        'key',
        'name',
        'parent_key',
        'alternative_id',
        'verb_usage',
        'data_provider_id',
    ];

    public function dataProvider(): BelongsTo
    {
        return $this->belongsTo(DataProvider::class, 'data_provider_id', 'account_id');
    }
}
