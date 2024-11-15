<?php

namespace App\Enums\LineItem;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self spend()
 * @method static self impressions()
 * @method static self spend_including_vendor_fees()
 */
final class LineItemBudgetTypeEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'spend' => 0,
            'impressions' => 1,
            'spend_including_vendor_fees' => 2,
        ];
    }
}
