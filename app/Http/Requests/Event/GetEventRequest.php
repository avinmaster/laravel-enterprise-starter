<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class GetEventRequest extends FormRequest
{
    public const ID = 'id';

    public function getId(): string
    {
        return $this->route(self::ID);
    }
}
