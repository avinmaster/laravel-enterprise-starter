<?php

namespace App\Services\Creative\Actions;

use App\Http\Resources\Creative\CreativeResource;
use App\Models\Creative;
use App\Repositories\Read\Creative\CreativeOfAdvertiserReadRepositoryInterface;
use App\Services\Creative\DTO\IndexCreativeOfAdvertiserDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexCreativeOfAdvertiserAction
{
    public function __construct(
        protected CreativeOfAdvertiserReadRepositoryInterface $creativeOfAdvertiserReadRepository
    ) {
    }

    public function run(IndexCreativeOfAdvertiserDTO $dto): AnonymousResourceCollection
    {
        $creatives = $this->creativeOfAdvertiserReadRepository->index($dto, Creative::RELATIONS);

        return CreativeResource::collection($creatives);
    }
}
