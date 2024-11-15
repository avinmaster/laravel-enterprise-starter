<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\BandwidthFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bandwidth extends Model
{
    use HasFactory;

    protected $table = 'bandwidths';

    protected $fillable = [
        'id',
        'name',
    ];

    public $timestamps = false;

    public static function newFactory(): BandwidthFactory
    {
        return new BandwidthFactory();
    }
}
