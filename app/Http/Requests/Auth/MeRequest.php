<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class MeRequest extends FormRequest
{
    public function getUserId(): string
    {
        return $this->user()->id;
    }
}
