<?php

namespace App\Services\Creative\Actions;

use App\Http\Resources\Creative\CreativeResource;
use App\Models\Creative;
use App\Repositories\Read\CreativeTemplate\CreativeTemplateReadRepositoryInterface;
use App\Repositories\Write\Creative\CreativeWriteRepositoryInterface;
use App\Services\Creative\DTO\CreateCreativeDTO;
use App\Services\Media\MediaService;

class CreateCreativeAction
{
    public function __construct(
        protected CreativeTemplateReadRepositoryInterface $creativeTemplateReadRepository,
        protected CreativeWriteRepositoryInterface $creativeWriteRepository,
        protected MediaService $mediaService,
    ) {
    }

    public function run(CreateCreativeDTO $dto): CreativeResource
    {
        $creativeTemplate = $this->creativeTemplateReadRepository->getById($dto->template_id);
        $dto->type = $creativeTemplate->creative_type;

        $mediaSizes = $this->mediaService->getMediaSizes($dto->thumbnail_url);
        $dto->width = $mediaSizes['width'];
        $dto->height = $mediaSizes['height'];

        $dto->ad_markup = $this->generateAdMarkup($dto);

        $creativeData = Creative::createModel($dto);

        $creative = $this->creativeWriteRepository->create($creativeData);

        if ($dto->creative_addons) {
            $this->creativeWriteRepository->attachCreativeAddons($creative, $dto->creative_addons);
        }

        if ($dto->technical_vendors) {
            $this->creativeWriteRepository->attachTechnicalVendors($creative, $dto->technical_vendors);
        }

        if ($dto->primary_asset) {
            $this->creativeWriteRepository->addPrimaryAsset($creative, $dto->primary_asset, $dto->user_id);
        }

        if ($dto->secondary_asset) {
            $this->creativeWriteRepository->addSecondaryAsset($creative, $dto->secondary_asset, $dto->user_id);
        }

        return new CreativeResource($creative->load(Creative::RELATIONS));
    }

    private function generateAdMarkup(CreateCreativeDTO $dto): string
    {
        if ($dto->type === 0) {
            $adm = '';

            if ($dto->click_url) {
                $adm .= "<a href='{$dto->click_url}' target='_blank'>";
            }

            if ($dto->thumbnail_url) {
                $adm .= "<img src='{$dto->thumbnail_url}' alt='' width='{$dto->width}' height='{$dto->height}'>";
            }

            if ($dto->click_url) {
                $adm .= "</a>";
            }

            return $adm;
        }

        return '';
    }
}
