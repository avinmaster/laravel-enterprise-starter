<?php

namespace App\Services\Creative\Actions;

use App\Http\Resources\Creative\CreativeResource;
use App\Models\Creative;
use App\Repositories\Read\Creative\CreativeReadRepositoryInterface;

class GetCreativeAction
{
    public function __construct(
        protected CreativeReadRepositoryInterface $creativeReadRepository
    ) {
    }

    public function run(string $id): CreativeResource
    {
        $creative = $this->creativeReadRepository->getById($id, Creative::RELATIONS);

        return new CreativeResource($creative);
    }
}
