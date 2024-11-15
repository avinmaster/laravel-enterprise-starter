<?php

namespace App\Http\Controllers\Api\V1\DeliveryModifier;

use App\Http\Requests\DeliveryModifier\UpdateDeliveryModifierRequest;
use App\Services\DeliveryModifier\Actions\UpdateDeliveryModifierAction;
use App\Services\DeliveryModifier\DTO\UpdateDeliveryModifierDTO;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\ApiController;
use App\Services\DeliveryModifier\DTO\IndexDeliveryModifierDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Services\DeliveryModifier\DTO\CreateDeliveryModifierDTO;
use App\Http\Resources\DeliveryModifier\DeliveryModifierResource;
use App\Http\Requests\DeliveryModifier\GetDeliveryModifierRequest;
use App\Http\Requests\DeliveryModifier\IndexDeliveryModifierRequest;
use App\Services\DeliveryModifier\Actions\GetDeliveryModifierAction;
use App\Http\Requests\DeliveryModifier\DeleteDeliveryModifierRequest;
use App\Http\Requests\DeliveryModifier\CreateDeliveryModifierRequest;
use App\Services\DeliveryModifier\Actions\IndexDeliveryModifierAction;
use App\Services\DeliveryModifier\Actions\DeleteDeliveryModifierAction;
use App\Services\DeliveryModifier\Actions\CreateDeliveryModifierAction;
use App\Exceptions\DeliveryModifier\FailedToCreateDeliveryModifierException;

class DeliveryModifierController extends ApiController
{
    /**
     * @throws FailedToCreateDeliveryModifierException
     */
    public function create(
        CreateDeliveryModifierRequest $request,
        CreateDeliveryModifierAction $createDeliveryModifierAction
    ): DeliveryModifierResource {
        $dto = CreateDeliveryModifierDTO::fromRequest($request);

        return $createDeliveryModifierAction->run($dto);
    }

    public function update(
        UpdateDeliveryModifierRequest $request,
        UpdateDeliveryModifierAction $updateDeliveryModifierAction
    ): DeliveryModifierResource {
        $dto = UpdateDeliveryModifierDTO::fromRequest($request);

        return $updateDeliveryModifierAction->run($request->getId(), $dto);
    }

    public function show(
        GetDeliveryModifierRequest $request,
        GetDeliveryModifierAction $getDeliveryModifierAction
    ): DeliveryModifierResource {
        return $getDeliveryModifierAction->run($request->getId());
    }

    public function delete(
        DeleteDeliveryModifierRequest $request,
        DeleteDeliveryModifierAction $deleteDeliveryModifierAction
    ): JsonResponse {
        $deleteDeliveryModifierAction->run($request->getId());

        return $this->response();
    }

    public function index(
        IndexDeliveryModifierRequest $request,
        IndexDeliveryModifierAction $indexDeliveryModifierAction
    ): AnonymousResourceCollection {
        $dto = IndexDeliveryModifierDTO::fromRequest($request);

        return $indexDeliveryModifierAction->run($dto);
    }
}
