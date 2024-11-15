<?php

namespace App\Http\Requests\Team;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeamRequest extends FormRequest
{
    public const NAME   = 'name';

    public function rules(): array
    {
        return [
            self::NAME => [
                'required',
                'string',
                'between:1,255',
            ],
        ];
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }
}
