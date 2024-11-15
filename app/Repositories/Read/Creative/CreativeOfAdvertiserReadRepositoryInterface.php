<?php

namespace App\Repositories\Read\Creative;

use App\Models\Creative;
use App\Services\Creative\DTO\IndexCreativeDTO;
use App\Services\Creative\DTO\IndexCreativeOfAdvertiserDTO;
use Illuminate\Pagination\LengthAwarePaginator;

interface CreativeOfAdvertiserReadRepositoryInterface
{
    public function index(IndexCreativeOfAdvertiserDTO $dto, array $relations = []): LengthAwarePaginator;
}
