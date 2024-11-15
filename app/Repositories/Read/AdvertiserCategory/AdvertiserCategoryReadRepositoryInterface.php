<?php

namespace App\Repositories\Read\AdvertiserCategory;

use App\Services\AdvertiserCategory\DTO\IndexAdvertiserCategoryDTO;
use Illuminate\Database\Eloquent\Collection;

interface AdvertiserCategoryReadRepositoryInterface
{
    public function index(IndexAdvertiserCategoryDTO $dto): Collection;
}
