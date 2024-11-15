<?php

namespace App\Enums\BidModifierTerms;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self EQUALS()
 * @method static self IN_RANGE()
 * @method static self BOOLEAN_EXPRESSION()
 */
final class ComparatorTypesEnum extends Enum
{
    public static function values(): array
    {
        return [
            'EQUALS' => 'equals',
            'IN_RANGE' => 'in_range',
            'BOOLEAN_EXPRESSION' => 'boolean_expression',
        ];
    }
}
