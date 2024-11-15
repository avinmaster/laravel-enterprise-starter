<?php

namespace App\Http\Controllers\Api\V1\CreativeTemplate;

use App\Http\Controllers\ApiController;
use App\Http\Requests\CreativeTemplate\IndexCreativeTemplateRequest;
use App\Services\CreativeTemplate\Actions\IndexCreativeTemplateAction;
use App\Services\CreativeTemplate\DTO\IndexCreativeTemplateDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CreativeTemplateController extends ApiController
{
    public function index(
        IndexCreativeTemplateRequest $indexCreativeTemplateRequest,
        IndexCreativeTemplateAction $indexCreativeTemplateAction
    ): AnonymousResourceCollection {
        $dto = IndexCreativeTemplateDTO::fromRequest($indexCreativeTemplateRequest);

        return $indexCreativeTemplateAction->run($dto);
    }
}