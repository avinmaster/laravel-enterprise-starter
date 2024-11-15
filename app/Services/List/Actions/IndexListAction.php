<?php

namespace App\Services\List\Actions;

use App\Http\Resources\List\ListResource;
use App\Repositories\Read\List\ListReadRepositoryInterface;
use App\Services\List\DTO\IndexListDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexListAction
{
    public function __construct(
        protected ListReadRepositoryInterface $listReadRepository
    ) {
    }

    public function run(IndexListDTO $dto): AnonymousResourceCollection
    {
        $lists = $this->listReadRepository->index($dto);

        return ListResource::collection($lists);
    }
}
