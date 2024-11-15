<?php

namespace App\Http\Controllers\Api\V1\AdvertiserCategory;

use App\Http\Controllers\ApiController;
use App\Http\Requests\AdvertiserCategory\IndexAdvertiserCategoryRequest;
use App\Services\AdvertiserCategory\Actions\IndexAdvertiserCategoryAction;
use App\Services\AdvertiserCategory\DTO\IndexAdvertiserCategoryDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AdvertiserCategoryController extends ApiController
{
    public function index(
        IndexAdvertiserCategoryRequest $indexAdvertiserCategoryRequest,
        IndexAdvertiserCategoryAction $indexAdvertiserCategoryAction
    ): AnonymousResourceCollection {
        $dto = IndexAdvertiserCategoryDTO::fromRequest($indexAdvertiserCategoryRequest);

        return $indexAdvertiserCategoryAction->run($dto);
    }
}