<?php

namespace App\Services\Timezone\Actions;

use App\Http\Resources\Timezone\TimezoneResource;
use App\Repositories\Read\Timezone\TimezoneReadRepositoryInterface;
use App\Services\Timezone\DTO\IndexTimezoneDTO;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexTimezoneAction
{
    public function __construct(
        protected TimezoneReadRepositoryInterface $readRepository
    ) {
    }

    public function run(IndexTimezoneDTO $dto): AnonymousResourceCollection
    {
        $data = $this->readRepository->index($dto);

        return TimezoneResource::collection($data);
    }
}
