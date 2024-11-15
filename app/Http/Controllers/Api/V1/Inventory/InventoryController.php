<?php

namespace App\Http\Controllers\Api\V1\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\IndexInventoryRequest;
use App\Services\Inventory\Actions\IndexInventoryAction;
use App\Services\Inventory\DTO\IndexInventoryDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class InventoryController extends Controller
{
    public function index(
        IndexInventoryRequest $request,
        IndexInventoryAction $indexInventoryAction
    ): AnonymousResourceCollection {
        $dto = IndexInventoryDTO::fromRequest($request);

        return $indexInventoryAction->run($dto);
    }
}
