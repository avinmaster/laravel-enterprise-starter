<?php

namespace App\Services\LineItem\Actions;

use App\Exceptions\LineItemFlight\FailedToInsertLineItemFlightException;
use App\Http\Resources\LineItem\LineItemResource;
use App\Models\LineItem;
use App\Repositories\Write\LineItem\LineItemWriteRepositoryInterface;
use App\Services\LineItem\DTO\CreateLineItemDTO;
use App\Services\LineItemFlight\UseCases\CreateLineItemFlightsUseCase;
use Illuminate\Support\Facades\DB;

class CreateLineItemAction
{
    public function __construct(
        protected LineItemWriteRepositoryInterface $lineItemWriteRepository,
        protected CreateLineItemFlightsUseCase $createLineItemFlightsUseCase,
    ) {
    }

    /**
     * @throws FailedToInsertLineItemFlightException
     */
    public function run(CreateLineItemDTO $dto): LineItemResource
    {
        $data = LineItem::createModel($dto);

        DB::beginTransaction();
        try {
            $lineItem = $this->lineItemWriteRepository->create($data);

            if ($dto->active_flights) {
                $this->createLineItemFlightsUseCase->run($data['id'], $dto->active_flights);
            }

            DB::commit();
        } catch (\Throwable) {
            DB::rollback();

            throw new FailedToInsertLineItemFlightException();
        }

        return new LineItemResource($lineItem->load(LineItem::RELATIONS));
    }
}
