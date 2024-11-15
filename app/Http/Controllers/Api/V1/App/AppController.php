<?php

namespace App\Http\Controllers\Api\V1\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\IndexAppRequest;
use App\Services\App\DTO\IndexAppDTO;
use App\Services\App\Actions\IndexAppAction;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class AppController extends Controller
{
    public function index(
        IndexAppRequest $request,
        IndexAppAction $indexAppAction
    ): AnonymousResourceCollection {
        $dto = IndexAppDTO::fromRequest($request);

        return $indexAppAction->run($dto);
    }
}
