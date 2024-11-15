<?php

namespace App\Http\Controllers\Api\V1\LineItem;

use App\Http\Controllers\ApiController;
use App\Http\Requests\LineItem\CreateLineItemRequest;
use App\Http\Requests\LineItem\GetLineItemRequest;
use App\Http\Requests\LineItem\IndexLineItemRequest;
use App\Http\Requests\LineItem\SetTargetingExpressionIdRequest;
use App\Http\Resources\LineItem\LineItemResource;
use App\Services\LineItem\Actions\CreateLineItemAction;
use App\Services\LineItem\Actions\GetLineItemAction;
use App\Services\LineItem\Actions\IndexLineItemAction;
use App\Services\LineItem\Actions\SetTargetingExpressionIdAction;
use App\Services\LineItem\DTO\CreateLineItemDTO;
use App\Services\LineItem\DTO\IndexLineItemDTO;
use App\Services\LineItem\DTO\SetTargetingExpressionIdDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LineItemController extends ApiController
{
    public function show(
        GetLineItemRequest $request,
        GetLineItemAction $getLineItemAction
    ): LineItemResource {
        return $getLineItemAction->run($request->getLineItemId());
    }
    
    public function index(
        IndexLineItemRequest $indexLineItemRequest,
        IndexLineItemAction $indexLineItemAction
    ): AnonymousResourceCollection {
        $dto = IndexLineItemDTO::fromRequest($indexLineItemRequest);

        return $indexLineItemAction->run($dto);
    }
    
    public function create(
        CreateLineItemRequest $createLineItemRequest,
        CreateLineItemAction $createLineItemAction
    ): LineItemResource {
        $dto = CreateLineItemDTO::fromRequest($createLineItemRequest);

        return $createLineItemAction->run($dto);
    }

    public function setTargetingExpressionId(
        SetTargetingExpressionIdRequest $setTargetingExpressionIdRequest,
        SetTargetingExpressionIdAction $setTargetingExpressionIdAction
    ): LineItemResource {
        $dto = SetTargetingExpressionIdDTO::fromRequest($setTargetingExpressionIdRequest);

        return $setTargetingExpressionIdAction->run($dto);
    }
}