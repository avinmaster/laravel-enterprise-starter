<?php

namespace App\Http\Controllers\Api\V1\Metro;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Metro\IndexMetroRequest;
use App\Services\Metro\Actions\IndexMetroAction;
use App\Services\Metro\DTO\IndexMetroDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MetroController extends ApiController
{
    public function index(
        IndexMetroRequest $indexMetroRequest,
        IndexMetroAction $indexMetroAction
    ): AnonymousResourceCollection {
        $dto = IndexMetroDTO::fromRequest($indexMetroRequest);

        return $indexMetroAction->run($dto);
    }
}