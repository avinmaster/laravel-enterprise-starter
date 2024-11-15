<?php

namespace App\Repositories\Read\Advertiser;

use App\Models\Advertiser;
use App\Services\Advertiser\DTO\IndexAdvertiserDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface AdvertiserReadRepositoryInterface
{
    public function getById(string $id, array $relations = []): Advertiser;

    public function index(IndexAdvertiserDTO $dto, array $relations = []): LengthAwarePaginator;
}
