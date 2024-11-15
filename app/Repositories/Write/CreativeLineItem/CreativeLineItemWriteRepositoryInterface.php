<?php

namespace App\Repositories\Write\CreativeLineItem;

use App\Models\CreativeLineItem;

interface CreativeLineItemWriteRepositoryInterface
{
    public function create(array $data): CreativeLineItem;
}
