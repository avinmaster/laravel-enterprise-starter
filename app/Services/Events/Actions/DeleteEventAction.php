<?php

namespace App\Services\Events\Actions;

use App\Repositories\Write\Event\EventWriteRepositoryInterface;

class DeleteEventAction
{
    public function __construct(
        protected EventWriteRepositoryInterface $eventWriteRepository
    ) {
    }

    public function run(string $id): void
    {
        $this->eventWriteRepository->delete($id);
    }
}
