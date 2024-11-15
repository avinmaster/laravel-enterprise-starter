<?php

namespace App\Services\Events\Actions;

use App\Http\Resources\Event\EventResource;
use App\Repositories\Read\Event\EventReadRepositoryInterface;

class GetEventAction
{
    public function __construct(
        protected EventReadRepositoryInterface $eventReadRepository
    ) {
    }

    public function run(string $id): EventResource
    {
        $event = $this->eventReadRepository->getById($id);

        return new EventResource($event);
    }
}
