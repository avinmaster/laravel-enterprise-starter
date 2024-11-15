<?php

namespace App\Repositories\Read\Event;

use App\Models\Event;
use App\Services\Events\DTO\IndexEventDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface EventReadRepositoryInterface
{
    public function getById(string $id, array $relations = []): Event;

    public function index(IndexEventDTO $dto, $relations = []): LengthAwarePaginator;
}
