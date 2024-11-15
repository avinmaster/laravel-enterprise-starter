<?php

namespace App\Services\Creative\Actions;

use App\Http\Resources\Creative\CreativeResource;
use App\Models\Creative;
use App\Repositories\Read\Creative\CreativeReadRepositoryInterface;
use App\Repositories\Read\CreativeTemplate\CreativeTemplateReadRepositoryInterface;
use App\Repositories\Write\Creative\CreativeWriteRepositoryInterface;
use App\Services\Creative\DTO\UpdateCreativeDTO;
use App\Services\Media\MediaService;

class UpdateCreativeAction
{
    public function __construct(
        protected CreativeReadRepositoryInterface $creativeReadRepository,
        protected CreativeTemplateReadRepositoryInterface $creativeTemplateReadRepository,
        protected CreativeWriteRepositoryInterface $creativeWriteRepository,
        protected MediaService $mediaService,
    ) {
    }

    public function run(string $creative_id, UpdateCreativeDTO $dto): CreativeResource
    {
        $creativeTemplate = $this->creativeTemplateReadRepository->getById($dto->template_id);
        $dto->type = $creativeTemplate->creative_type;

        $mediaSizes = $this->mediaService->getMediaSizes($dto->thumbnail_url);
        $dto->width = $mediaSizes['width'];
        $dto->height = $mediaSizes['height'];

        $creativeData = $this->prepareUpdateData($dto);
        $this->creativeWriteRepository->update($creative_id, $creativeData);

        $creative = $this->creativeReadRepository->getById($creative_id);

        $this->processCreativeAddons($creative, $dto);
        $this->processTechnicalVendors($creative, $dto);
        $this->processPrimaryAsset($creative, $dto);
        $this->processSecondaryAsset($creative, $dto);

        return new CreativeResource($creative->load(Creative::RELATIONS));
    }

    private function processCreativeAddons(Creative $creative,  UpdateCreativeDTO $dto): void
    {
        $this->creativeWriteRepository->detachCreativeAddons($creative);
        if ($dto->creative_addons) {
            $this->creativeWriteRepository->attachCreativeAddons($creative, $dto->creative_addons);
        }
    }

    private function processTechnicalVendors(Creative $creative,  UpdateCreativeDTO $dto): void
    {
        $this->creativeWriteRepository->detachTechnicalVendors($creative);
        if ($dto->technical_vendors) {
            $this->creativeWriteRepository->attachTechnicalVendors($creative, $dto->technical_vendors);
        }
    }

    private function processPrimaryAsset(Creative $creative,  UpdateCreativeDTO $dto): void
    {
        $existingPrimaryAsset = $creative->primaryAsset()->first();

        if ($existingPrimaryAsset) {
            if ($dto->primary_asset !== $existingPrimaryAsset->uuid) {
                $this->creativeWriteRepository->removePrimaryAsset($creative);
            }

            if ($dto->primary_asset && $dto->primary_asset !== $existingPrimaryAsset->uuid) {
                $this->creativeWriteRepository->addPrimaryAsset($creative, $dto->primary_asset, $dto->user_id);
            }
        } elseif ($dto->primary_asset) {
            $this->creativeWriteRepository->addPrimaryAsset($creative, $dto->primary_asset, $dto->user_id);
        }
    }

    private function processSecondaryAsset(Creative $creative,  UpdateCreativeDTO $dto): void
    {
        $existingSecondaryAsset = $creative->secondaryAsset()->first();

        if ($existingSecondaryAsset) {
            if ($dto->secondary_asset !== $existingSecondaryAsset->uuid) {
                $this->creativeWriteRepository->removeSecondaryAsset($creative);
            }

            if ($dto->secondary_asset && $dto->secondary_asset !== $existingSecondaryAsset->uuid) {
                $this->creativeWriteRepository->addSecondaryAsset($creative, $dto->secondary_asset, $dto->user_id);
            }
        } elseif ($dto->secondary_asset) {
            $this->creativeWriteRepository->addSecondaryAsset($creative, $dto->secondary_asset, $dto->user_id);
        }
    }

    private function prepareUpdateData(UpdateCreativeDTO $dto): array
    {
        return [
            'user_id' => $dto->user_id,
            'advertiser_id' => $dto->advertiser_id,
            'name' => $dto->name,
            'type' => $dto->type,
            'width' => $dto->width,
            'height' => $dto->height,
            'sizeless' => $dto->sizeless,
            'secure' => $dto->secure,
            'click_url' => $dto->click_url,
            'native_offer' => $dto->native_offer,
            'content_tag' => $dto->content_tag,
            'template_id' => $dto->template_id,
            'rule_id' => $dto->rule_id,
            'rule_key' => $dto->rule_key,
            'pixels' => json_encode($dto->pixels),
            'scripts' => json_encode($dto->scripts),
            'thumbnail_url' => $dto->thumbnail_url,
            'start_date' => $dto->start_date,
            'end_date' => $dto->end_date,
            'alternative_id' => $dto->alternative_id,
            'active' => $dto->active,
        ];
    }
}
