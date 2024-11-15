<?php

namespace App\Http\Controllers\Api\V1\CampaignCreative;

use App\Http\Controllers\ApiController;
use App\Services\CampaignCreative\DTO\IndexCampaignCreativeDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Services\CampaignCreative\DTO\CreateCampaignCreativeDTO;
use App\Http\Resources\CampaignCreative\CampaignCreativeResource;
use App\Http\Requests\CampaignCreative\GetCampaignCreativeRequest;
use App\Http\Requests\CampaignCreative\IndexCampaignCreativeRequest;
use App\Services\CampaignCreative\Actions\GetCampaignCreativeAction;
use App\Http\Requests\CampaignCreative\CreateCampaignCreativeRequest;
use App\Services\CampaignCreative\Actions\IndexCampaignCreativeAction;
use App\Services\CampaignCreative\Actions\CreateCampaignCreativeAction;

class CampaignCreativeController extends ApiController
{
    public function create(
        CreateCampaignCreativeRequest $createCampaignCreativeRequest,
        CreateCampaignCreativeAction $createCampaignCreativeAction
    ): CampaignCreativeResource {
        $dto = CreateCampaignCreativeDTO::fromRequest($createCampaignCreativeRequest);

        return $createCampaignCreativeAction->run($dto);
    }

    public function index(
        IndexCampaignCreativeRequest $indexCampaignCreativeRequest,
        IndexCampaignCreativeAction $indexCampaignCreativeAction
    ): AnonymousResourceCollection {
        $dto = IndexCampaignCreativeDTO::fromRequest($indexCampaignCreativeRequest);

        return $indexCampaignCreativeAction->run($dto);
    }

    public function show(
        GetCampaignCreativeRequest $getCampaignCreativeRequest,
        GetCampaignCreativeAction $getCampaignCreativeAction
    ): CampaignCreativeResource {
        return $getCampaignCreativeAction->run($getCampaignCreativeRequest->getId());
    }
}
