<?php

namespace App\Http\Requests\DeliveryModifier;

use Illuminate\Foundation\Http\FormRequest;

class GetDeliveryModifierRequest extends FormRequest
{
    public const ID = 'id';

    public function getId(): string
    {
        return $this->route(self::ID);
    }
}
