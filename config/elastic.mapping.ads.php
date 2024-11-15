<?php

return [
    "id" => [
        "type" => "keyword"
    ],
    "type" => [
        "type" => "integer"
    ],
    "active" => [
        "type" => "boolean"
    ],
    "cpm_bid" => [
        "type" => "float"
    ],
    "currency" => [
        "type" => "keyword"
    ],
    "advertiser" => [
        "type" => "object"
    ],
    "campaign" => [
        "type" => "object"
    ],
    "line_item" => [
        "type" => "object"
    ],
    "creative" => [
        "type" => "object",
        "properties" => [
            "id" => [
                "type" => "keyword",
                "index" => false,
            ],
            "type" => [
                "type" => "integer",
            ],
            "width" => [
                "type" => "integer",
            ],
            "height" => [
                "type" => "integer",
            ],
            "duration" => [
                "type" => "integer",
            ],
            "ad_markup" => [
                "type" => "text",
                "index" => false,
            ],
        ]
    ],
    "targeting_include" => [
        "type" => "object",
        "properties" => [
            "at" => [
                "type" => "text",
                "fields" => [
                    "keyword" => [
                        "type" => "keyword",
                        "ignore_above" => 256
                    ]
                ],
            ],
            "api_framework" => [
                "type" => "text",
                "fields" => [
                    "keyword" => [
                        "type" => "keyword",
                        "ignore_above" => 256
                    ]
                ],
            ],
            "pos" => [
                "type" => "text",
                "fields" => [
                    "keyword" => [
                        "type" => "keyword",
                        "ignore_above" => 256
                    ]
                ],
            ],
        ]
    ],
    "targeting_exclude" => [
        "type" => "object",
        "properties" => [
            "at" => [
                "type" => "text",
                "fields" => [
                    "keyword" => [
                        "type" => "keyword",
                        "ignore_above" => 256
                    ]
                ],
            ],
            "api_framework" => [
                "type" => "text",
                "fields" => [
                    "keyword" => [
                        "type" => "keyword",
                        "ignore_above" => 256
                    ]
                ],
            ],
            "pos" => [
                "type" => "text",
                "fields" => [
                    "keyword" => [
                        "type" => "keyword",
                        "ignore_above" => 256
                    ]
                ],
            ],
        ]
    ],
];
