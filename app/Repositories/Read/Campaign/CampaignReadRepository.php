<?php

namespace App\Repositories\Read\Campaign;

use App\Models\Campaign;
use Illuminate\Database\Eloquent\Builder;
use App\Services\Campaign\DTO\IndexCampaignDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Exceptions\Campaign\CampaignDoesNotExistException;


class CampaignReadRepository implements CampaignReadRepositoryInterface
{
    private function query(): Builder
    {
        return Campaign::query();
    }

    /**
     * @throws CampaignDoesNotExistException
     */
    public function getById(string $id, array $relations = []): Campaign
    {
        /* @var Campaign $campaign */
        $campaign = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$campaign) {
            throw new CampaignDoesNotExistException();
        }

        return $campaign;
    }

    public function index(IndexCampaignDTO $dto, array $relations = []): LengthAwarePaginator
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
}
