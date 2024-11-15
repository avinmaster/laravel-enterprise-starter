<?php

namespace App\Services\Advertiser\Actions;

use App\Http\Resources\Advertiser\AdvertiserResource;
use App\Models\Advertiser;
use App\Repositories\Read\Advertiser\AdvertiserReadRepositoryInterface;
use App\Repositories\Write\Advertiser\AdvertiserWriteRepositoryInterface;
use App\Services\Advertiser\DTO\UpdateAdvertiserDTO;

class UpdateAdvertiserAction
{
    public function __construct(
        protected AdvertiserReadRepositoryInterface  $advertiserReadRepository,
        protected AdvertiserWriteRepositoryInterface $advertiserWriteRepository,
    ) {
    }

    public function run(string $advertiser_id, UpdateAdvertiserDTO $dto): AdvertiserResource
    {
        $data = $this->prepareUpdateData($dto);
        $advertiser = $this->advertiserWriteRepository->update($advertiser_id, $data);

        if ($dto->default_image) {
            $defaultImage = $advertiser->load('defaultImage')->defaultImage;

            if ($defaultImage) {
                if ($defaultImage->uuid !== $dto->default_image) {
                    $this->advertiserWriteRepository->removeDefaultImage($advertiser);
                    $this->advertiserWriteRepository->addDefaultImage($advertiser, $dto->default_image, $dto->user_id);
                }
            } else {
                $this->advertiserWriteRepository->addDefaultImage($advertiser, $dto->default_image, $dto->user_id);
            }
        } else {
            $this->advertiserWriteRepository->removeDefaultImage($advertiser);
        }

        $advertiser = $this->advertiserReadRepository->getById($advertiser_id);

        return new AdvertiserResource($advertiser->load(Advertiser::RELATIONS));
    }

    private function prepareUpdateData(UpdateAdvertiserDTO $dto): array
    {
        return [
            'name' => $dto->name,
            'domain' => $dto->domain,
            'app_bundle' => $dto->app_bundle,
            'alternative_id' => $dto->alternative_id,
            'notes' => $dto->notes,
            'default_currency' => $dto->default_currency,
            'default_continent' => $dto->default_continent,
            'category_id' => $dto->category_id,
            'default_click_url' => $dto->default_click_url,
            'active' => $dto->active,
            'default_image' => $dto->default_image,
            'default_campaign_preset' => $dto->default_campaign_preset,
            'default_creative_thumbnail_url' => $dto->default_creative_thumbnail_url,
            'default_line_item_preset' => $dto->default_line_item_preset,
            'default_targeting_preset' => $dto->default_targeting_preset,
            'is_comcast_segment_eligible' => $dto->is_comcast_segment_eligible,
            'skad_mmp' => $dto->skad_mmp,
        ];
    }
}
