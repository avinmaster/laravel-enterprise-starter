<?php

namespace App\Repositories\Read\Creative;

use App\Models\Creative;
use App\Services\Creative\DTO\IndexCreativeDTO;
use Illuminate\Pagination\LengthAwarePaginator;

interface CreativeReadRepositoryInterface
{
    public function getById(string $id, array $relations = []): Creative;

    public function index(IndexCreativeDTO $dto, array $relations = []): LengthAwarePaginator;
}
