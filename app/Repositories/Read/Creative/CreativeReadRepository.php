<?php

namespace App\Repositories\Read\Creative;

use App\Exceptions\Creative\CreativeDoesNotExistException;
use App\Models\Creative;
use App\Services\Creative\DTO\IndexCreativeDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class CreativeReadRepository implements CreativeReadRepositoryInterface
{
    /* @throws CreativeDoesNotExistException */
    public function getById(string $id, array $relations = []): Creative
    {
        /* @var Creative $creative */
        $creative = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$creative) {
            throw new CreativeDoesNotExistException();
        }

        return $creative;
    }

    public function index(IndexCreativeDTO $dto, array $relations = []): LengthAwarePaginator
    {
        $query = $this->query();

        $query->when($dto->with_trashed, function ($query) use ($dto) {
            $query->withTrashed();
        });

        return $query
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
        return Creative::query();
    }
}
