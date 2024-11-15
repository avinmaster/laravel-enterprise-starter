<?php

namespace App\Services\Creative\Actions;

use App\Http\Resources\Creative\CreativeResource;
use App\Models\Creative;
use App\Repositories\Read\Creative\CreativeReadRepositoryInterface;
use App\Services\Creative\DTO\IndexCreativeDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexCreativeAction
{
    public function __construct(
        protected CreativeReadRepositoryInterface $creativeReadRepository
    ) {
    }

    public function run(IndexCreativeDTO $dto): AnonymousResourceCollection
    {
        $creatives = $this->creativeReadRepository->index($dto, Creative::RELATIONS);

        return CreativeResource::collection($creatives);
    }
}
