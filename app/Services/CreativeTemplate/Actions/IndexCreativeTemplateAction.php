<?php

namespace App\Services\CreativeTemplate\Actions;

use App\Http\Resources\CreativeTemplate\CreativeTemplateResource;
use App\Repositories\Read\CreativeTemplate\CreativeTemplateReadRepositoryInterface;
use App\Services\CreativeTemplate\DTO\IndexCreativeTemplateDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexCreativeTemplateAction
{
    public function __construct(
        protected CreativeTemplateReadRepositoryInterface $CreativeTemplateReadRepository
    ) {
    }

    public function run(IndexCreativeTemplateDTO $dto): AnonymousResourceCollection
    {
        $creativeTemplates = $this->CreativeTemplateReadRepository->index($dto);

        return CreativeTemplateResource::collection($creativeTemplates);
    }
}
