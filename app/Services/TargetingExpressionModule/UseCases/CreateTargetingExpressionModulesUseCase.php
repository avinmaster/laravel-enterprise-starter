<?php

namespace App\Services\TargetingExpressionModule\UseCases;

use App\Repositories\Write\TargetingExpressionModule\TargetingExpressionModuleWriteRepositoryInterface;
use Illuminate\Support\Str;

class CreateTargetingExpressionModulesUseCase
{
    public function __construct(
        protected TargetingExpressionModuleWriteRepositoryInterface $targetingExpressionModuleWriteRepository,
    ) {
    }

    public function run(string $targeting_expression_id, array $modules): void
    {
        foreach ($modules as &$moduleData) {
            $moduleData['id'] = Str::uuid()->toString();
            $moduleData['targeting_expression_id'] = $targeting_expression_id;
        }

        $this->targetingExpressionModuleWriteRepository->insert($modules);
    }
}