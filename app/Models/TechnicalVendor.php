<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalVendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'creative_vendor_id',
        'creative_vendor_name',
        'iab_gdpr_vendor_id',
        'adx_gdpr_provider_id',
        'adx_vendor_approval_id',
    ];
}
