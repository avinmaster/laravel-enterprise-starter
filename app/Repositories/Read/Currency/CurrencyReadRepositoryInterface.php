<?php

namespace App\Repositories\Read\Currency;

use App\Services\Currency\DTO\IndexCurrencyDTO;
use Illuminate\Database\Eloquent\Collection;

interface CurrencyReadRepositoryInterface
{
    public function index(IndexCurrencyDTO $dto): Collection;
}
