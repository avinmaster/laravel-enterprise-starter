<?php

namespace App\Repositories\Read\Campaign;

use App\Models\Campaign;
use App\Services\Campaign\DTO\IndexCampaignDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface CampaignReadRepositoryInterface
{
    public function getById(string $id, array $relations = []): Campaign;

    public function index(IndexCampaignDTO $dto, array $relations = []): LengthAwarePaginator;
}
