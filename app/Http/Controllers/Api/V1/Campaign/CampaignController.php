<?php

namespace App\Http\Controllers\Api\V1\Campaign;

use App\Http\Requests\Campaign\UpdateCampaignRequest;
use App\Services\Campaign\Actions\UpdateCampaignAction;
use App\Services\Campaign\DTO\UpdateCampaignDTO;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\ApiController;
use App\Services\Campaign\DTO\IndexCampaignDTO;
use App\Services\Campaign\DTO\CreateCampaignDTO;
use App\Http\Resources\Campaign\CampaignResource;
use App\Http\Requests\Campaign\GetCampaignRequest;
use App\Http\Requests\Campaign\IndexCampaignRequest;
use App\Services\Campaign\Actions\GetCampaignAction;
use App\Http\Requests\Campaign\DeleteCampaignRequest;
use App\Http\Requests\Campaign\CreateCampaignRequest;
use App\Services\Campaign\Actions\IndexCampaignAction;
use App\Services\Campaign\Actions\DeleteCampaignAction;
use App\Services\Campaign\Actions\CreateCampaignAction;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CampaignController extends ApiController
{
    public function index(
        IndexCampaignRequest $request,
        IndexCampaignAction  $indexCampaignAction
    ): AnonymousResourceCollection
    {
        $dto = IndexCampaignDTO::fromRequest($request);

        return $indexCampaignAction->run($dto);
    }

    public function show(
        GetCampaignRequest $request,
        GetCampaignAction  $getCampaignAction
    ): CampaignResource
    {
        return $getCampaignAction->run($request->getId());
    }

    public function create(
        CreateCampaignRequest $request,
        CreateCampaignAction $createCampaignAction
    ): CampaignResource
    {
        $dto = CreateCampaignDTO::fromRequest($request);

        return $createCampaignAction->run($dto);
    }

    public function update(
        UpdateCampaignRequest $updateCampaignRequest,
        UpdateCampaignAction  $updateCampaignAction
    ): CampaignResource
    {
        $dto = UpdateCampaignDTO::fromRequest($updateCampaignRequest);

        return $updateCampaignAction->run($updateCampaignRequest->getId(), $dto);
    }

    public function delete(
        DeleteCampaignRequest $request,
        DeleteCampaignAction  $deleteCampaignAction
    ): JsonResponse
    {
        $deleteCampaignAction->run($request->getId());

        return $this->response();
    }
}
