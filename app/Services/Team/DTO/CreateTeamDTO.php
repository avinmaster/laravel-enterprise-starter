<?php

namespace App\Services\Team\DTO;

use App\Http\Requests\Team\CreateTeamRequest;
use Spatie\LaravelData\Data;

class CreateTeamDTO extends Data
{
    const TEAM_NAME_POSTFIX = 'team';

    public string $owner_id;
    public string $name;
    public ?string $parent_team_id;

    public static function fromRequest(CreateTeamRequest $request): self
    {
        return self::from([
            'owner_id'  => $request->user()->id,
            'name'      => $request->getName(),
        ]);
    }

    public static function fromData(string $owner_id, string $email): self
    {
        return self::from([
            'owner_id'  => $owner_id,
            'name'      => $email . " " . self::TEAM_NAME_POSTFIX,
        ]);
    }
}
