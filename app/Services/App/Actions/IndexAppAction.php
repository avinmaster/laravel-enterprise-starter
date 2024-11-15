<?php

namespace App\Services\App\Actions;

use App\Services\App\DTO\IndexAppDTO;
use App\Http\Resources\App\AppResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Repositories\Read\App\AppReadRepositoryInterface;

class IndexAppAction
{
    public function __construct(
        protected AppReadRepositoryInterface $appReadRepository
    ) {
    }

    public function run(IndexAppDTO $dto): AnonymousResourceCollection
    {
        $apps = $this->appReadRepository->index($dto);

        return AppResource::collection($apps);
    }
}
