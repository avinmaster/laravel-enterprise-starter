<?php

namespace App\Repositories\Write\TargetingExpressionModule;

use App\Exceptions\TargetingExpressionModule\FailedToInsertTargetingExpressionModuleException;
use App\Models\TargetingExpressionModule;
use Illuminate\Database\Eloquent\Builder;

class TargetingExpressionModuleWriteRepository implements TargetingExpressionModuleWriteRepositoryInterface
{
    /**
     * @throws FailedToInsertTargetingExpressionModuleException
     */
    public function insert(array $data): void
    {
        if (!$this->query()->insert($data)) {
            throw new FailedToInsertTargetingExpressionModuleException();
        }
    }

    private function query(): Builder
    {
        return TargetingExpressionModule::query();
    }
}
