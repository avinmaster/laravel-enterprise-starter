<?php

namespace App\Http\Controllers\Api\V1\InventorySource;

use App\Http\Controllers\ApiController;
use App\Http\Requests\InventorySource\IndexInventorySourceRequest;
use App\Services\InventorySource\Actions\IndexInventorySourceAction;
use App\Services\InventorySource\DTO\IndexInventorySourceDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class InventorySourceController extends ApiController
{
    public function index(
        IndexInventorySourceRequest $request,
        IndexInventorySourceAction $indexInventorySourceAction
    ): AnonymousResourceCollection {
        $dto = IndexInventorySourceDTO::fromRequest($request);

        return $indexInventorySourceAction->run($dto);
    }
}
