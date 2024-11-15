<?php

namespace App\Http\Controllers\Api\V1\Currency;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Currency\IndexCurrencyRequest;
use App\Services\Currency\Actions\IndexCurrencyAction;
use App\Services\Currency\DTO\IndexCurrencyDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CurrencyController extends ApiController
{
    public function index(
        IndexCurrencyRequest $indexCurrencyRequest,
        IndexCurrencyAction $indexCurrencyAction
    ): AnonymousResourceCollection {
        $dto = IndexCurrencyDTO::fromRequest($indexCurrencyRequest);

        return $indexCurrencyAction->run($dto);
    }
}