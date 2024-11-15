<?php

namespace App\Http\Requests\Team;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamRequest extends FormRequest
{
    public const NAME       = 'name';
    public const TEAM_ID    = 'team_id';

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

    public function getTeamId(): string
    {
        return $this->route(self::TEAM_ID);
    }
}
