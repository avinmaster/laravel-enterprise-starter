<?php

namespace App\Http\Controllers\Api\V1\Advertiser;

use App\Http\Requests\Advertiser\UpdateAdvertiserRequest;
use App\Services\Advertiser\Actions\UpdateAdvertiserAction;
use App\Services\Advertiser\DTO\UpdateAdvertiserDTO;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\ApiController;
use App\Services\Advertiser\DTO\IndexAdvertiserDTO;
use App\Services\Advertiser\DTO\CreateAdvertiserDTO;
use App\Http\Resources\Advertiser\AdvertiserResource;
use App\Http\Requests\Advertiser\GetAdvertiserRequest;
use App\Http\Requests\Advertiser\IndexAdvertiserRequest;
use App\Services\Advertiser\Actions\GetAdvertiserAction;
use App\Http\Requests\Advertiser\DeleteAdvertiserRequest;
use App\Http\Requests\Advertiser\CreateAdvertiserRequest;
use App\Services\Advertiser\Actions\IndexAdvertiserAction;
use App\Services\Advertiser\Actions\DeleteAdvertiserAction;
use App\Services\Advertiser\Actions\CreateAdvertiserAction;
use App\Http\Requests\Advertiser\BulkDeleteAdvertiserRequest;
use App\Services\Advertiser\Actions\BulkDeleteAdvertiserAction;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AdvertiserController extends ApiController
{
    public function create(
        CreateAdvertiserRequest $request,
        CreateAdvertiserAction $createAdvertiserAction
    ): AdvertiserResource {
        $dto = CreateAdvertiserDTO::fromRequest($request);

        return $createAdvertiserAction->run($dto);
    }

    public function update(
        UpdateAdvertiserRequest $request,
        UpdateAdvertiserAction $updateAdvertiserAction
    ): AdvertiserResource {
        $dto = UpdateAdvertiserDTO::fromRequest($request);

        return $updateAdvertiserAction->run($request->getId(), $dto);
    }

    public function delete(
        DeleteAdvertiserRequest $request,
        DeleteAdvertiserAction $deleteAdvertiserAction
    ): JsonResponse {
        $deleteAdvertiserAction->run($request->getId());

        return $this->response();
    }

    public function bulkDelete(
        BulkDeleteAdvertiserRequest $request,
        BulkDeleteAdvertiserAction $bulkDeleteAdvertiserAction
    ): JsonResponse {
        $bulkDeleteAdvertiserAction->run($request->getIds());

        return $this->response();
    }

    public function show(
        GetAdvertiserRequest $request,
        GetAdvertiserAction $getAdvertiserAction
    ): AdvertiserResource {
        return $getAdvertiserAction->run($request->getId());
    }

    public function index(
        IndexAdvertiserRequest $request,
        IndexAdvertiserAction $indexAdvertiserAction
    ): AnonymousResourceCollection {
        $dto = IndexAdvertiserDTO::fromRequest($request);

        return $indexAdvertiserAction->run($dto);
    }
}
