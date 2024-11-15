<?php

namespace App\Services\Events\Actions;

use App\Models\Event;
use App\Services\Events\DTO\CreateEventDTO;
use App\Http\Resources\Event\EventResource;
use App\Repositories\Write\Event\EventWriteRepositoryInterface;

class CreateEventAction
{
    public function __construct(
        protected EventWriteRepositoryInterface $eventWriteRepository
    ) {
    }

    public function run(CreateEventDTO $dto): EventResource
    {
        $data = Event::createModel($dto);
        $event = $this->eventWriteRepository->create($data);

        return new EventResource($event);
    }
}
