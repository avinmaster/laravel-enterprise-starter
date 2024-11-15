<?php

namespace App\Services\Currency\Actions;

use App\Http\Resources\Currency\CurrencyResource;
use App\Repositories\Read\Currency\CurrencyReadRepositoryInterface;
use App\Services\Currency\DTO\IndexCurrencyDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexCurrencyAction
{
    public function __construct(
        protected CurrencyReadRepositoryInterface $CurrencyReadRepository
    ) {
    }

    public function run(IndexCurrencyDTO $dto): AnonymousResourceCollection
    {
        $currencies = $this->CurrencyReadRepository->index($dto);

        return CurrencyResource::collection($currencies);
    }
}
