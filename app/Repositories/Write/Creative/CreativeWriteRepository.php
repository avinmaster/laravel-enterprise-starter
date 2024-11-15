<?php

namespace App\Repositories\Write\Creative;

use App\Constants\Creative\CreativeConstants;
use App\Constants\UploadFile\UploadFileConstants;
use App\Exceptions\Creative\FailedToCreateCreativeException;
use App\Exceptions\Creative\FailedToDeleteCreativeException;
use App\Exceptions\Creative\FailedToUpdateCreativeException;
use App\Models\Creative;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CreativeWriteRepository implements CreativeWriteRepositoryInterface
{
    /* @throws FailedToCreateCreativeException */
    public function create(array $data): Creative
    {
        /* @var Creative $creative */
        if (!$creative = $this->query()->create($data)) {
            throw new FailedToCreateCreativeException();
        }

        return $creative;
    }

    /* @throws FailedToUpdateCreativeException */
    public function update(string $creative_id, array $data): void
    {
        if (!$this->query()->where('id', $creative_id)->update($data)) {
            throw new FailedToUpdateCreativeException();
        }
    }

    /* @throws FailedToDeleteCreativeException */
    public function delete(string $creative_id): void
    {
        if (!$this->query()->where('id', $creative_id)->delete()) {
            throw new FailedToDeleteCreativeException();
        }
    }

    public function attachCreativeAddons(Creative $creative, array $creative_addons): void
    {
        $creative->creativeAddons()->attach($creative_addons);
    }

    public function detachCreativeAddons(Creative $creative): void
    {
        $creative->creativeAddons()->detach();
    }

    public function attachTechnicalVendors(Creative $creative, array $technical_vendors): void
    {
        $creative->technicalVendors()->attach($technical_vendors);
    }

    public function detachTechnicalVendors(Creative $creative): void
    {
        $creative->technicalVendors()->detach();
    }

    public function addPrimaryAsset(Creative $creative, string $primary_asset, string $user_id): void
    {
        $media = Media::where('uuid', $primary_asset)
            ->where('collection_name', UploadFileConstants::DEFAULT_FILE_MAIN)
            ->where('model_id', $user_id)
            ->first();

        if ($media) {
            $media->collection_name = CreativeConstants::CREATIVE_PRIMARY_ASSET;
            $creative->primaryAsset()->save($media);
        }
    }

    public function addSecondaryAsset(Creative $creative, string $secondary_asset, string $user_id): void
    {
        $media = Media::where('uuid', $secondary_asset)
            ->where('collection_name', UploadFileConstants::DEFAULT_FILE_MAIN)
            ->where('model_id', $user_id)
            ->first();

        if ($media) {
            $media->collection_name = CreativeConstants::CREATIVE_SECONDARY_ASSET;
            $creative->secondaryAsset()->save($media);
        }
    }

    public function removePrimaryAsset(Creative $creative): void
    {
        $creative->clearMediaCollection(CreativeConstants::CREATIVE_PRIMARY_ASSET);
    }

    public function removeSecondaryAsset(Creative $creative): void
    {
        $creative->clearMediaCollection(CreativeConstants::CREATIVE_SECONDARY_ASSET);
    }

    private function query(): Builder
    {
        return Creative::query();
    }
}
