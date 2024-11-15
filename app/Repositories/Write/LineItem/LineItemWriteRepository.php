<?php

namespace App\Repositories\Write\LineItem;

use App\Exceptions\LineItem\FailedToCreateLineItemException;
use App\Exceptions\LineItem\FailedToUpdateLineItemException;
use App\Models\LineItem;
use Illuminate\Database\Eloquent\Builder;

class LineItemWriteRepository implements LineItemWriteRepositoryInterface
{
    /* @throws FailedToCreateLineItemException */
    public function create(array $data): LineItem
    {
        /* @var LineItem $lineItem */
        if (!$lineItem = $this->query()->create($data)) {
            throw new FailedToCreateLineItemException();
        }

        return $lineItem;
    }

    /* @throws FailedToUpdateLineItemException */
    public function update(string $line_item_id, array $data): void
    {
        if (!$this->query()->where('id', $line_item_id)->update($data)) {
            throw new FailedToUpdateLineItemException();
        }
    }
    
    private function query(): Builder
    {
        return LineItem::query();
    }
}
