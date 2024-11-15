<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static insert(mixed $chunk)
 */
class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'site_name',
        'placement_id',
        'inventory_source_id',
        'volume_ranking',
    ];

    public function getFillable() {
        return $this->fillable;
    }
}
