<?php

namespace App\Repositories\Write\LineItem;

use App\Models\LineItem;

interface LineItemWriteRepositoryInterface
{
    public function create(array $data): LineItem;

    public function update(string $line_item_id, array $data): void;
}
