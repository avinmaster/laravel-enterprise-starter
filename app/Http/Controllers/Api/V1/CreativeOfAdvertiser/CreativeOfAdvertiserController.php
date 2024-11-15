<?php

namespace App\Http\Controllers\Api\V1\CreativeOfAdvertiser;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Creative\IndexCreativeOfAdvertiserRequest;
use App\Services\Creative\Actions\IndexCreativeOfAdvertiserAction;
use App\Services\Creative\DTO\IndexCreativeOfAdvertiserDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CreativeOfAdvertiserController extends ApiController
{
    public function index(
        IndexCreativeOfAdvertiserRequest $indexCreativeOfAdvertiserRequest,
        IndexCreativeOfAdvertiserAction $indexCreativeOfAdvertiserAction
    ): AnonymousResourceCollection {
        $dto = IndexCreativeOfAdvertiserDTO::fromRequest($indexCreativeOfAdvertiserRequest);

        return $indexCreativeOfAdvertiserAction->run($dto);
    }
}
