<?php

namespace App\Http\Controllers\Api\V1\Creative;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Creative\CreateCreativeRequest;
use App\Http\Requests\Creative\DeleteCreativeRequest;
use App\Http\Requests\Creative\GetCreativeRequest;
use App\Http\Requests\Creative\IndexCreativeRequest;
use App\Http\Requests\Creative\UpdateCreativeRequest;
use App\Http\Resources\Creative\CreativeResource;
use App\Services\Creative\Actions\CreateCreativeAction;
use App\Services\Creative\Actions\DeleteCreativeAction;
use App\Services\Creative\Actions\GetCreativeAction;
use App\Services\Creative\Actions\IndexCreativeAction;
use App\Services\Creative\Actions\UpdateCreativeAction;
use App\Services\Creative\DTO\CreateCreativeDTO;
use App\Services\Creative\DTO\IndexCreativeDTO;
use App\Services\Creative\DTO\UpdateCreativeDTO;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CreativeController extends ApiController
{
    public function show(
        GetCreativeRequest $getCreativeRequest,
        GetCreativeAction $getCreativeAction
    ): CreativeResource {
        $creative_id = $getCreativeRequest->getId();

        return $getCreativeAction->run($creative_id);
    }
    
    public function index(
        IndexCreativeRequest $indexCreativeRequest,
        IndexCreativeAction $indexCreativeAction
    ): AnonymousResourceCollection {
        $dto = IndexCreativeDTO::fromRequest($indexCreativeRequest);

        return $indexCreativeAction->run($dto);
    }

    public function create(
        CreateCreativeRequest $createCreativeRequest,
        CreateCreativeAction $createCreativeAction
    ): CreativeResource {
        $dto = CreateCreativeDTO::fromRequest($createCreativeRequest);

        return $createCreativeAction->run($dto);
    }

    public function update(
        UpdateCreativeRequest $updateCreativeRequest,
        UpdateCreativeAction $updateCreativeAction
    ): CreativeResource {
        $dto = UpdateCreativeDTO::fromRequest($updateCreativeRequest);

        return $updateCreativeAction->run($updateCreativeRequest->getId(), $dto);
    }

    public function delete(
        DeleteCreativeRequest $deleteCreativeRequest,
        DeleteCreativeAction $deleteCreativeAction
    ): JsonResponse {
        $deleteCreativeAction->run($deleteCreativeRequest->getId());

        return $this->response();
    }
}