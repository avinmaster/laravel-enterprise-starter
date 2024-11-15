<?php

namespace App\Repositories\Write\Advertiser;

use App\Constants\Advertiser\AdvertiserConstants;
use App\Constants\UploadFile\UploadFileConstants;
use App\Exceptions\Advertiser\FailedToUpdateAdvertiserException;
use App\Models\Advertiser;
use Illuminate\Database\Eloquent\Builder;
use App\Exceptions\Advertiser\FailedToDeleteAdvertiserException;
use App\Exceptions\Advertiser\FailedToCreateAdvertiserException;
use App\Exceptions\Advertiser\FailedToBulkDeleteAdvertiserException;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class AdvertiserWriteRepository implements AdvertiserWriteRepositoryInterface
{
    private function query(): Builder
    {
        return Advertiser::query();
    }

    /**
     * @throws FailedToCreateAdvertiserException
     */
    public function create(array $data): Advertiser
    {
        /* @var Advertiser $advertiser */
        if (!$advertiser = $this->query()->create($data)) {
            throw new FailedToCreateAdvertiserException();
        }

        return $advertiser;
    }

    /**
     * @throws FailedToUpdateAdvertiserException
     */
    public function update(string $id, array $data): Advertiser
    {
        /* @var Advertiser $advertiser */
        $advertiser = $this->query()->where('id', $id)->first();

        if (!$advertiser || !$advertiser->update($data)) {
            throw new FailedToUpdateAdvertiserException();
        }

        return $advertiser;
    }

    /**
     * @throws FailedToDeleteAdvertiserException
     */
    public function delete(string $id): bool
    {
        if (!$this->query()->where('id', $id)->delete()) {
            throw new FailedToDeleteAdvertiserException();
        }

        return true;
    }

    /**
     * @throws FailedToBulkDeleteAdvertiserException
     */
    public function bulkDelete(array $ids): bool
    {
        if (!$this->query()->whereIn('id',$ids)->delete()) {
            throw new FailedToBulkDeleteAdvertiserException();
        }

        return true;
    }

    public function addDefaultImage(Advertiser $advertiser, string $default_image, string $user_id): void
    {
        $media = Media::where('uuid', $default_image)
            ->where('collection_name', UploadFileConstants::DEFAULT_FILE_MAIN)
            ->where('model_id', $user_id)
            ->first();

        if ($media) {
            $media->collection_name = AdvertiserConstants::DEFAULT_CREATIVE_THUMB;
            $advertiser->defaultImage()->save($media);
        }
    }

    public function removeDefaultImage(Advertiser $advertiser): void
    {
        $advertiser->clearMediaCollection(AdvertiserConstants::DEFAULT_CREATIVE_THUMB);
    }

    public function bulkRemoveDefaultImages(array $ids): void
    {
         Media::query()
             ->whereIn('model_id', $ids)
             ->where('collection_name', AdvertiserConstants::DEFAULT_CREATIVE_THUMB)
             ->delete();
    }
}
