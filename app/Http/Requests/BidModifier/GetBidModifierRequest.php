<?php

namespace App\Http\Requests\BidModifier;

use Illuminate\Foundation\Http\FormRequest;

class GetBidModifierRequest extends FormRequest
{
    public const ID = 'id';

    public function getId(): string
    {
        return $this->route(self::ID);
    }
}
