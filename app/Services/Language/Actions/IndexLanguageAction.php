<?php

namespace App\Services\Language\Actions;

use App\Http\Resources\Language\LanguageResource;
use App\Repositories\Read\Language\LanguageReadRepositoryInterface;
use App\Services\Language\DTO\IndexLanguageDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexLanguageAction
{
    public function __construct(
        protected LanguageReadRepositoryInterface $readRepository
    ) {
    }

    public function run(IndexLanguageDTO $dto): AnonymousResourceCollection
    {
        $data = $this->readRepository->index($dto);

        return LanguageResource::collection($data);
    }
}
