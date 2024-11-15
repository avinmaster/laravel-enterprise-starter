<?php

namespace App\Services\Events\Actions;

use App\Services\Events\DTO\IndexEventDTO;
use App\Http\Resources\Event\EventResource;
use App\Repositories\Read\Event\EventReadRepositoryInterface;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexEventAction
{
    public function __construct(
        protected EventReadRepositoryInterface $eventReadRepository
    ) {
    }

    public function run(IndexEventDTO $dto): AnonymousResourceCollection
    {
        $events = $this->eventReadRepository->index($dto);

        return EventResource::collection($events);
    }
}
