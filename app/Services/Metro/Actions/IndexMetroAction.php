<?php

namespace App\Services\Metro\Actions;

use App\Http\Resources\Metro\MetroResource;
use App\Repositories\Read\Metro\MetroReadRepositoryInterface;
use App\Services\Metro\DTO\IndexMetroDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexMetroAction
{
    public function __construct(
        protected MetroReadRepositoryInterface $metroReadRepository
    ) {
    }

    public function run(IndexMetroDTO $dto): AnonymousResourceCollection
    {
        $Metros = $this->metroReadRepository->index($dto);

        return MetroResource::collection($Metros);
    }
}
