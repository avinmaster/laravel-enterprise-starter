<?php

namespace App\Http\Controllers\Api\V1\Language;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Language\IndexLanguageRequest;
use App\Services\Language\Actions\IndexLanguageAction;
use App\Services\Language\DTO\IndexLanguageDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LanguageController extends ApiController
{
    public function index(
        IndexLanguageRequest $request,
        IndexLanguageAction $indexLanguageAction
    ): AnonymousResourceCollection {
        $dto = IndexLanguageDTO::fromRequest($request);

        return $indexLanguageAction->run($dto);
    }
}
