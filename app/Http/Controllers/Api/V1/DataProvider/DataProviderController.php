<?php

namespace App\Http\Controllers\Api\V1\DataProvider;

use App\Http\Controllers\ApiController;
use App\Http\Requests\DataProvider\IndexDataProviderRequest;
use App\Services\DataProvider\Actions\IndexDataProviderAction;
use App\Services\DataProvider\DTO\IndexDataProviderDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DataProviderController extends ApiController
{
    public function index(
        IndexDataProviderRequest $request,
        IndexDataProviderAction $indexDataProviderAction
    ): AnonymousResourceCollection {
        $dto = IndexDataProviderDTO::fromRequest($request);

        return $indexDataProviderAction->run($dto);
    }
}
