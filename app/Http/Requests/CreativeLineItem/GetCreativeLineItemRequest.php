<?php

namespace App\Http\Requests\CreativeLineItem;

use Illuminate\Foundation\Http\FormRequest;

class GetCreativeLineItemRequest extends FormRequest
{
    public const CLI_ID = 'cli_id';

    public function getId(): string
    {
        return $this->route(self::CLI_ID);
    }
}
