<?php

namespace App\Http\Controllers\Api\V1\List;

use App\Http\Controllers\ApiController;
use App\Http\Requests\List\IndexListRequest;
use App\Services\List\Actions\IndexListAction;
use App\Services\List\DTO\IndexListDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ListController extends ApiController
{
    public function index(
        IndexListRequest $indexListRequest,
        IndexlistAction $indexListAction
    ): AnonymousResourceCollection {
        $dto = IndexListDTO::fromRequest($indexListRequest);

        return $indexListAction->run($dto);
    }
}