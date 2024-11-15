<?php

namespace App\Repositories\Write\BidModifier;

use App\Models\BidModifier;

interface BidModifierWriteRepositoryInterface
{
    public function create(array $data): BidModifier;

    public function update(string $id, array $data): bool;
}
