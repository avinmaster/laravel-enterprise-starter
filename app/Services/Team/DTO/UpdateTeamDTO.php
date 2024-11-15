<?php

namespace App\Services\Team\DTO;

use App\Http\Requests\Team\UpdateTeamRequest;
use Spatie\LaravelData\Data;

class UpdateTeamDTO extends Data
{
    public string $name;
    public string $team_id;

    public static function fromRequest(UpdateTeamRequest $request): self
    {
        return self::from([
            'name'      => $request->getName(),
            'team_id'   => $request->getTeamId(),
        ]);
    }
}
