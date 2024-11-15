<?php

namespace App\Enums\LineItem;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self banner()
 * @method static self video()
 * @method static self native()
 */
final class LineItemTypeEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'banner' => 0,
            'video' => 1,
            'native' => 2,
        ];
    }
}
