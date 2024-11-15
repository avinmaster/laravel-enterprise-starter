<?php

namespace App\Repositories\Write\Advertiser;

use App\Models\Advertiser;

interface AdvertiserWriteRepositoryInterface
{
    public function create(array $data): Advertiser;

    public function update(string $id, array $data): Advertiser;

    public function delete(string $id): bool;

    public function bulkDelete(array $ids): bool;

    public function addDefaultImage(Advertiser $advertiser, string $default_image, string $user_id): void;

    public function removeDefaultImage(Advertiser $advertiser): void;

    public function bulkRemoveDefaultImages(array $ids): void;
}
