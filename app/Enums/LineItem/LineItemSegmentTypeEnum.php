<?php

namespace App\Enums\LineItem;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self type_all()
 * @method static self type_1P()
 * @method static self type_3P()
 */
final class LineItemSegmentTypeEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'type_all' => 'all',
            'type_1P' => '1st_party',
            'type_3P' => '3rd_party',
        ];
    }
}

