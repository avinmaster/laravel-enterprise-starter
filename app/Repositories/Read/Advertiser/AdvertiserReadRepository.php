<?php

namespace App\Repositories\Read\Advertiser;

use App\Models\Advertiser;
use Illuminate\Database\Eloquent\Builder;
use App\Services\Advertiser\DTO\IndexAdvertiserDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Exceptions\Advertiser\AdvertiserDoesNotExistException;

class AdvertiserReadRepository implements AdvertiserReadRepositoryInterface
{
    private function query(): Builder
    {
       return Advertiser::query();
    }

    /**
     * @throws AdvertiserDoesNotExistException
     */
    public function getById(string $id, array $relations = []): Advertiser
    {
        /* @var Advertiser $advertiser */
        $advertiser = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$advertiser) {
            throw new AdvertiserDoesNotExistException();
        }

        return $advertiser;
    }

    public function index(IndexAdvertiserDTO $dto, array $relations = []): LengthAwarePaginator
    {
        $query = $this->query();

        $query->when($dto->sorts, function ($query) use ($dto) {
            foreach ($dto->sorts as $sort) {
                $query->orderBy($sort['value'], $sort['key']);
            }
        });

        return $query->paginate(
            $dto->pagination->per_page,
            ['*'],
            'page',
            $dto->pagination->page
        );
    }
}
