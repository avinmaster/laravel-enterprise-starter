<?php

namespace App\Services\Advertiser\Actions;

use App\Models\Advertiser;
use App\Services\Advertiser\DTO\CreateAdvertiserDTO;
use App\Http\Resources\Advertiser\AdvertiserResource;
use App\Repositories\Write\Advertiser\AdvertiserWriteRepositoryInterface;

class CreateAdvertiserAction
{
    public function __construct(
        protected AdvertiserWriteRepositoryInterface $advertiserWriteRepository
    ) {
    }

    public function run(CreateAdvertiserDTO $dto): AdvertiserResource
    {
        $data = Advertiser::createModel($dto);
        $advertiser = $this->advertiserWriteRepository->create($data);

        if ($dto->default_image) {
            $this->advertiserWriteRepository->addDefaultImage($advertiser, $dto->default_image, $dto->user_id);
        }

        return new AdvertiserResource($advertiser->load(Advertiser::RELATIONS));
    }
}
