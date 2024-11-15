<?php

namespace App\Repositories\Write\Creative;

use App\Models\Creative;

interface CreativeWriteRepositoryInterface
{
    public function create(array $data): Creative;

    public function update(string $creative_id, array $data): void;

    public function delete(string $creative_id): void;

    public function attachCreativeAddons(Creative $creative, array $creative_addons): void;

    public function detachCreativeAddons(Creative $creative): void;

    public function attachTechnicalVendors(Creative $creative, array $technical_vendors): void;

    public function detachTechnicalVendors(Creative $creative): void;

    public function addPrimaryAsset(Creative $creative, string $primary_asset, string $user_id): void;

    public function removePrimaryAsset(Creative $creative): void;

    public function addSecondaryAsset(Creative $creative, string $secondary_asset, string $user_id): void;

    public function removeSecondaryAsset(Creative $creative): void;
}
