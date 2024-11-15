<?php

namespace App\Repositories\Write\Event;

use App\Models\Event;

interface EventWriteRepositoryInterface
{
    public function create(array $data): Event;

    public function delete(string $id): bool;
}
