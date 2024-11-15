<?php

namespace App\Http\Controllers\Api\V1\Event;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\ApiController;
use App\Services\Events\DTO\IndexEventDTO;
use App\Services\Events\DTO\CreateEventDTO;
use App\Http\Resources\Event\EventResource;
use App\Http\Requests\Event\GetEventRequest;
use App\Http\Requests\Event\IndexEventRequest;
use App\Http\Requests\Event\DeleteEventRequest;
use App\Services\Events\Actions\GetEventAction;
use App\Http\Requests\Event\CreateEventRequest;
use App\Services\Events\Actions\IndexEventAction;
use App\Services\Events\Actions\CreateEventAction;
use App\Services\Events\Actions\DeleteEventAction;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EventController extends ApiController
{
    public function create(
        CreateEventRequest $request,
        CreateEventAction $createEventAction
    ): EventResource {
        $dto = CreateEventDTO::fromRequest($request);

        return $createEventAction->run($dto);
    }

    public function show(
        GetEventRequest $request,
        GetEventAction $getEventAction
    ): EventResource {
        return $getEventAction->run($request->getId());
    }

    public function delete(
        DeleteEventRequest $request,
        DeleteEventAction $deleteEventAction
    ): JsonResponse {
        $deleteEventAction->run($request->getId());

        return $this->response();
    }

    public function index(
        IndexEventRequest $request,
        IndexEventAction $indexEventAction
    ): AnonymousResourceCollection {
        $dto = IndexEventDTO::fromRequest($request);

        return $indexEventAction->run($dto);
    }
}
