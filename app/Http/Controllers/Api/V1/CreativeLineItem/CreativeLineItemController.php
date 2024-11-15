<?php

namespace App\Http\Controllers\Api\V1\CreativeLineItem;

use App\Http\Controllers\ApiController;
use App\Http\Requests\CreativeLineItem\CreateCreativeLineItemRequest;
use App\Http\Requests\CreativeLineItem\GetCreativeLineItemRequest;
use App\Http\Requests\CreativeLineItem\IndexCreativeLineItemRequest;
use App\Http\Resources\CreativeLineItem\CreativeLineItemResource;
use App\Services\CreativeLineItem\Actions\CreateCreativeLineItemAction;
use App\Services\CreativeLineItem\Actions\GetCreativeLineItemAction;
use App\Services\CreativeLineItem\Actions\IndexCreativeLineItemAction;
use App\Services\CreativeLineItem\DTO\CreateCreativeLineItemDTO;
use App\Services\CreativeLineItem\DTO\IndexCreativeLineItemDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CreativeLineItemController extends ApiController
{
    public function show(
        GetCreativeLineItemRequest $request,
        GetCreativeLineItemAction $getCreativeLineItemAction
    ): CreativeLineItemResource {
        return $getCreativeLineItemAction->run($request->getId());
    }

    public function index(
        IndexCreativeLineItemRequest $indexCreativeLineItemRequest,
        IndexCreativeLineItemAction $indexCreativeLineItemAction
    ): AnonymousResourceCollection {
        $dto = IndexCreativeLineItemDTO::fromRequest($indexCreativeLineItemRequest);

        return $indexCreativeLineItemAction->run($dto);
    }
    
    public function create(
        CreateCreativeLineItemRequest $createCreativeLineItemRequest,
        CreateCreativeLineItemAction $createCreativeLineItemAction
    ): CreativeLineItemResource {
        $dto = CreateCreativeLineItemDTO::fromRequest($createCreativeLineItemRequest);

        return $createCreativeLineItemAction->run($dto);
    }
}