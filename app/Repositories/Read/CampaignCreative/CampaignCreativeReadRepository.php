<?php

namespace App\Repositories\Read\CampaignCreative;

use App\Models\CampaignCreative;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Services\CampaignCreative\DTO\IndexCampaignCreativeDTO;
use App\Exceptions\CampaignCreative\CampaignCreativeDoesNotExistException;

class CampaignCreativeReadRepository implements CampaignCreativeReadRepositoryInterface
{
    /**
     * @throws CampaignCreativeDoesNotExistException
     */
    public function getById(string $id, array $relations = []): CampaignCreative
    {
        /* @var CampaignCreative $campaignCreative */
        $campaignCreative = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$campaignCreative) {
            throw new CampaignCreativeDoesNotExistException();
        }

        return $campaignCreative;
    }

    public function index(IndexCampaignCreativeDTO $dto, array $relations = []): LengthAwarePaginator
    {
        return $this->query()
            ->where('user_id', $dto->user_id)
            ->with($relations)
            ->paginate(
                $dto->pagination->per_page,
                ['*'],
                'page',
                $dto->pagination->page
            );
    }

    private function query(): Builder
    {
        return CampaignCreative::query();
    }
}
