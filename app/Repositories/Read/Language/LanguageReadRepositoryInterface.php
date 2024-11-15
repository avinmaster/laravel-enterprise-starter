<?php

namespace App\Repositories\Read\Language;

use App\Services\Language\DTO\IndexLanguageDTO;
use Illuminate\Database\Eloquent\Collection;

interface LanguageReadRepositoryInterface
{
    public function index(IndexLanguageDTO $dto): Collection;
}
