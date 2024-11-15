<?php

namespace App\Repositories\Read\Event;

use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use App\Services\Events\DTO\IndexEventDTO;
use App\Exceptions\Event\EventDoesNotExist;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class EventReadRepository implements EventReadRepositoryInterface
{
    private function query(): Builder
    {
        return Event::query();
    }

    /**
     * @throws EventDoesNotExist
     */
    public function getById(string $id, array $relations = []): Event
    {
        /**@var Event $event */
        $event = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$event) {
            throw new EventDoesNotExist();
        }

        return $event;
    }

    public function index(IndexEventDTO $dto, $relations = []): LengthAwarePaginator
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
