<?php

namespace App\Repositories\Write\LineItemFlight;

use App\Exceptions\LineItemFlight\FailedToInsertLineItemFlightException;
use App\Models\LineItemFlight;
use Illuminate\Database\Eloquent\Builder;

class LineItemFlightWriteRepository implements LineItemFlightWriteRepositoryInterface
{
    /**
     * @throws FailedToInsertLineItemFlightException
     */
    public function insert(array $data): void
    {
        if (!$this->query()->insert($data)) {
            throw new FailedToInsertLineItemFlightException();
        }
    }

    private function query(): Builder
    {
        return LineItemFlight::query();
    }
}
