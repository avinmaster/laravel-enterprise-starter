<?php

namespace App\Repositories\Read\Creative;

use App\Exceptions\Creative\CreativeDoesNotExistException;
use App\Models\Creative;
use App\Services\Creative\DTO\IndexCreativeDTO;
use App\Services\Creative\DTO\IndexCreativeOfAdvertiserDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class CreativeOfAdvertiserReadRepository implements CreativeOfAdvertiserReadRepositoryInterface
{
    public function index(IndexCreativeOfAdvertiserDTO $dto, array $relations = []): LengthAwarePaginator
    {
        $query = $this->query();

        $query->when($dto->with_trashed, function ($query) use ($dto) {
            $query->withTrashed();
        });

        return $query
            ->where('user_id', $dto->user_id)
            ->where('advertiser_id', $dto->advertiser_id)
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
        return Creative::query();
    }
}
