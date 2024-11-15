<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventorySource extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_viewable',
        'default_viewable',
        'viewable',
        'super_user_only',
        'active',
        'name',
        'key',
        'mobile_app',
        'mobile_web',
        'video',
        'desktop',
        'mobile_native',
        'desktop_native',
        'other',
        'category',
    ];
}
