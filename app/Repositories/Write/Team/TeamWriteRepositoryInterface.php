<?php

namespace App\Repositories\Write\Team;

use App\Models\Team;

interface TeamWriteRepositoryInterface
{
    public function create(array $data): Team;
    public function update(Team $team, array $data): void;
}
