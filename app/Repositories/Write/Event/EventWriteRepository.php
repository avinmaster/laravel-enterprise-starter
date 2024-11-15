<?php

namespace App\Repositories\Write\Event;

use App\Exceptions\Event\FailedToDeleteEventException;
use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use App\Exceptions\Event\FailedToCreateEventException;

class EventWriteRepository implements EventWriteRepositoryInterface
{
    private function query(): Builder
    {
        return Event::query();
    }

    /**
     * @throws FailedToCreateEventException
     */
    public function create(array $data): Event
    {
        /* @var Event $event */
        if (!$event = $this->query()->create($data)) {
            throw new FailedToCreateEventException();
        }

        return $event;
    }

    /**
     * @throws FailedToDeleteEventException
     */
    public function delete(string $id): bool
    {
        if(!$this->query()->where('id', $id)->delete()) {
            throw new FailedToDeleteEventException();
        }

        return true;
    }
}
