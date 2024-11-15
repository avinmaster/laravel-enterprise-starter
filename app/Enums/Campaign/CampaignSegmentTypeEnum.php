<?php

namespace App\Enums\Campaign;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self type_all()
 * @method static self type_1P()
 * @method static self type_3P()
 */
final class CampaignSegmentTypeEnum extends Enum
{
    public static function values(): array
    {
        return [
            'type_all' => 'all',
            'type_1P' => '1st_party',
            'type_3P' => '3rd_party',
        ];
    }
}
