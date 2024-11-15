<?php

namespace App\Http\Controllers\Api\V1\Timezone;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Timezone\IndexTimezoneRequest;
use App\Services\Timezone\Actions\IndexTimezoneAction;
use App\Services\Timezone\DTO\IndexTimezoneDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TimezoneController extends ApiController
{
    public function index(
        IndexTimezoneRequest $request,
        IndexTimezoneAction $indexTimezoneAction
    ): AnonymousResourceCollection {
        $dto = IndexTimezoneDTO::fromRequest($request);

        return $indexTimezoneAction->run($dto);
    }
}
