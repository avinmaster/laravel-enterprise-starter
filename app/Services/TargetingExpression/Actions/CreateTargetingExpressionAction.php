<?php

namespace App\Services\TargetingExpression\Actions;

use App\Exceptions\TargetingExpression\FailedToCreateTargetingExpressionException;
use App\Http\Resources\TargetingExpression\TargetingExpressionResource;
use App\Models\TargetingExpression;
use App\Repositories\Write\TargetingExpression\TargetingExpressionWriteRepositoryInterface;
use App\Services\TargetingExpression\DTO\CreateTargetingExpressionDTO;
use App\Services\TargetingExpressionModule\UseCases\CreateTargetingExpressionModulesUseCase;
use Illuminate\Support\Facades\DB;
use Throwable;

class CreateTargetingExpressionAction
{
    public function __construct(
        protected TargetingExpressionWriteRepositoryInterface $targetingExpressionWriteRepository,
        protected CreateTargetingExpressionModulesUseCase $createTargetingExpressionModulesUseCase,
    ) {
    }

    /**
     * @throws FailedToCreateTargetingExpressionException
     */
    public function run(CreateTargetingExpressionDTO $dto): TargetingExpressionResource
    {
        $data = TargetingExpression::createModel($dto);

        DB::beginTransaction();
        try {
            $targetingExpression = $this->targetingExpressionWriteRepository->create($data);

            if ($dto->modules) {
                $this->createTargetingExpressionModulesUseCase->run($data['id'], $dto->modules);
            }

            DB::commit();
        } catch (Throwable) {
            DB::rollback();

            throw new FailedToCreateTargetingExpressionException();
        }

        return new TargetingExpressionResource($targetingExpression->load(TargetingExpression::RELATIONS));
    }
}
