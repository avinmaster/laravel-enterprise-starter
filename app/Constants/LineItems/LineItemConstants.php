<?php

namespace App\Constants\LineItems;

class LineItemConstants
{
    public const TYPES = [
        0,
        1,
        2,
    ];

    public const TYPE_LABELS = [
        'banner',
        'video',
        'native',
    ];

    public const BUDGET_TYPES = [
        0,
        1,
        2,
    ];

    public const BUDGET_TYPE_LABELS = [
        'spend',
        'impressions',
        'spend with vendor fees',
    ];

    public const REVENUE_TYPE = 'CPM';
    public const REVENUE_TYPE_CPC = 'CPC';
    public const REVENUE_TYPE_CPCV = 'CPCV';
    public const REVENUE_TYPE_CPI = 'CPI';
    public const REVENUE_TYPE_CPA = 'CPA';

    public const BID_SHADING_WIN_RATE_CONTROL_NORMAL = 'NORMAL';
    public const BID_SHADING_WIN_RATE_CONTROL_MORE_AGGRESSIVE = 'MORE_AGGRESSIVE';
    public const BID_SHADING_WIN_RATE_CONTROL_LESS_AGGRESSIVE = 'LESS_AGGRESSIVE';

    public const BIDDING_STRATEGY_PACING_LIFETIME = 'lifetime';
    public const BIDDING_STRATEGY_PACING_NONE = 'none';
    public const BIDDING_STRATEGY_PACING_DAILY = 'daily';
    public const BIDDING_STRATEGY_PACING_FLIGHT = 'flight';

    public const CREATIVE_WEIGHTING_METHOD_RANDOM = 'RANDOM';
    public const CREATIVE_WEIGHTING_METHOD_WEIGHTED = 'WEIGHTED';

    public const FREQUENCY_CAP_TYPES = [
        0,
        1,
    ];

    public const FREQUENCY_CAP_VENDOR_TAPAD = 'TAPAD';
    public const FREQUENCY_CAP_VENDOR_LIVERAMP = 'LIVERAMP';

    public const SEGMENT_EXTENSION_DEFAULT_NONE = 'none';
    public const SEGMENT_EXTENSION_DEFAULT_PERSON = 'person';
    public const SEGMENT_EXTENSION_DEFAULT_HOUSEHOLD = 'household';
    public const SEGMENT_EXTENSION_DEFAULT_PERSON_EXTEND_ONLY = 'person_extend_only';
    public const SEGMENT_EXTENSION_DEFAULT_HOUSEHOLD_EXTEND_ONLY = 'household_extend_only';

    public const SEGMENT_EXTENSION_TYPE_DEFAULT_NONE = 'none';
    public const SEGMENT_EXTENSION_TYPE_DEFAULT_1P = '1P';
    public const SEGMENT_EXTENSION_TYPE_DEFAULT_3P = '3P';
    public const SEGMENT_EXTENSION_TYPE_DEFAULT_ALL = 'ALL';

    public const SEGMENT_EXTENSION_VENDORS_DEFAULT_TAPAD = 'TAPAD';
    public const SEGMENT_EXTENSION_VENDORS_DEFAULT_LIVERAMP = 'LIVERAMP';

    public const SKAD_ASSIGNMENT_LEVEL_CREATIVE_LINE_ITEM = 'creative_line_item';
    public const SKAD_ASSIGNMENT_LEVEL_LINE_ITEM = 'line_item';
}
