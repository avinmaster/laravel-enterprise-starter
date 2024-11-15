<?php

namespace App\Services\LineItem\Actions;

use App\Http\Resources\LineItem\LineItemResource;
use App\Models\LineItem;
use App\Repositories\Read\LineItem\LineItemReadRepositoryInterface;
use App\Repositories\Write\LineItem\LineItemWriteRepositoryInterface;
use App\Services\LineItem\DTO\SetTargetingExpressionIdDTO;

class SetTargetingExpressionIdAction
{
    public function __construct(
        protected LineItemReadRepositoryInterface $lineItemReadRepository,
        protected LineItemWriteRepositoryInterface $lineItemWriteRepository,
    ) {
    }

    public function run(SetTargetingExpressionIdDTO $dto): LineItemResource
    {
        $lineItemData = $this->prepareUpdateData($dto);

        $this->lineItemWriteRepository->update($dto->line_item_id, $lineItemData);

        $lineItem = $this->lineItemReadRepository->getById($dto->line_item_id, LineItem::RELATIONS);

        return new LineItemResource($lineItem);
    }

    private function prepareUpdateData(SetTargetingExpressionIdDTO $dto): array
    {
        return [
            "targeting_expression_id" => $dto->targeting_expression_id,
        ];
    }
}
