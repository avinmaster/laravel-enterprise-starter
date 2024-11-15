<?php

namespace App\Repositories\Write\CreativeLineItem;

use App\Exceptions\CreativeLineItem\FailedToCreateCreativeLineItemException;
use App\Models\CreativeLineItem;
use Illuminate\Database\Eloquent\Builder;

class CreativeLineItemWriteRepository implements CreativeLineItemWriteRepositoryInterface
{
    /**
     * @throws FailedToCreateCreativeLineItemException
     */
    public function create(array $data): CreativeLineItem
    {
        /* @var CreativeLineItem $creativeLineItem */
        if (!$creativeLineItem = $this->query()->create($data)) {
            throw new FailedToCreateCreativeLineItemException();
        }

        return $creativeLineItem;
    }

    private function query(): Builder
    {
        return CreativeLineItem::query();
    }
}
