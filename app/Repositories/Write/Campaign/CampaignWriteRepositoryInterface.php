<?php

namespace App\Repositories\Write\Campaign;

use App\Models\Campaign;

interface CampaignWriteRepositoryInterface
{
    public function create(array $data): Campaign;

    public function update(string $id, array $data): bool;

    public function delete(string $id): bool;
}
