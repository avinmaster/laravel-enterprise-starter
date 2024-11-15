<?php

namespace App\Repositories\Read\CampaignCreative;

use App\Models\CampaignCreative;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Services\CampaignCreative\DTO\IndexCampaignCreativeDTO;

interface CampaignCreativeReadRepositoryInterface
{
    public function getById(string $id, array $relations = []): CampaignCreative;

    public function index(IndexCampaignCreativeDTO $dto, array $relations = []): LengthAwarePaginator;
}
