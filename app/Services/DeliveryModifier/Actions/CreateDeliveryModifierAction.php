<?php

namespace App\Services\DeliveryModifier\Actions;

use Throwable;
use App\Models\DeliveryModifier;
use Illuminate\Support\Facades\DB;
use App\Models\DeliveryModifierTerm;
use App\Models\DeliveryModifierTermTargeting;
use App\Services\DeliveryModifier\DTO\CreateDeliveryModifierDTO;
use App\Http\Resources\DeliveryModifier\DeliveryModifierResource;
use App\Exceptions\DeliveryModifier\FailedToCreateDeliveryModifierException;
use App\Services\DeliveryModifierTerm\UseCases\GetDeliveryModifierTermDataUseCase;
use App\Repositories\Write\DeliveryModifier\DeliveryModifierWriteRepositoryInterface;

class CreateDeliveryModifierAction
{
    public function __construct(
        private readonly GetDeliveryModifierTermDataUseCase $deliveryModifierTermDataUseCase,
        private readonly DeliveryModifierWriteRepositoryInterface $deliveryModifierWriteRepository,
    ) {
    }

    /**
     * @throws FailedToCreateDeliveryModifierException
     */
    public function run(CreateDeliveryModifierDTO $dto): DeliveryModifierResource
    {
        DB::beginTransaction();

        try {
            $data = DeliveryModifier::createModel($dto);
            $deliveryModifier = $this->deliveryModifierWriteRepository->create($data);

            if ($dto->delivery_modifier_terms) {
                $deliveryModifierTerms = $this->deliveryModifierTermDataUseCase->run(
                    $dto->delivery_modifier_terms,
                    $data['id']
                );
                DeliveryModifierTerm::query()->insert($deliveryModifierTerms['terms']);
                DeliveryModifierTermTargeting::query()->insert($deliveryModifierTerms['targetings']);

                $deliveryModifier = $deliveryModifier->load(['deliveryModifierTerms.deliveryModifierTermTargetings']);
            }

            DB::commit();
        } catch (Throwable) {
            DB::rollBack();

            throw new FailedToCreateDeliveryModifierException();
        }

        return new DeliveryModifierResource($deliveryModifier);
    }
}
