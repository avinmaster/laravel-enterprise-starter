<?php

namespace App\Services\DeliveryModifier\Actions;

use App\Exceptions\DeliveryModifier\FailedToUpdateDeliveryModifierException;
use App\Http\Resources\DeliveryModifier\DeliveryModifierResource;
use App\Models\DeliveryModifier;
use App\Models\DeliveryModifierTerm;
use App\Models\DeliveryModifierTermTargeting;
use App\Repositories\Read\DeliveryModifier\DeliveryModifierReadRepositoryInterface;
use App\Repositories\Write\DeliveryModifier\DeliveryModifierWriteRepositoryInterface;
use App\Services\DeliveryModifier\DTO\UpdateDeliveryModifierDTO;
use App\Services\DeliveryModifierTerm\UseCases\GetDeliveryModifierTermDataUseCase;
use Illuminate\Support\Facades\DB;
use Throwable;

class UpdateDeliveryModifierAction
{
    public function __construct(
        protected GetDeliveryModifierTermDataUseCase $deliveryModifierTermDataUseCase,
        protected DeliveryModifierReadRepositoryInterface  $deliveryModifierReadRepository,
        protected DeliveryModifierWriteRepositoryInterface $deliveryModifierWriteRepository,
    ) {
    }

    /**
     * @throws FailedToUpdateDeliveryModifierException
     */
    public function run(string $deliveryModifier_id, UpdateDeliveryModifierDTO $dto): DeliveryModifierResource
    {
        DB::beginTransaction();

        try {
            $deliveryModifierData = $this->prepareUpdateData($dto);
            $this->deliveryModifierWriteRepository->update($deliveryModifier_id, $deliveryModifierData);

            $deliveryModifierTerms = $this->deliveryModifierTermDataUseCase->run(
                $dto->delivery_modifier_terms,
                $deliveryModifier_id
            );

            DeliveryModifierTermTargeting::query()->where('delivery_modifier_id', $deliveryModifier_id)->delete();
            DeliveryModifierTerm::query()->where('delivery_modifier_id', $deliveryModifier_id)->delete();

            DeliveryModifierTerm::query()->insert($deliveryModifierTerms['terms']);
            DeliveryModifierTermTargeting::query()->insert($deliveryModifierTerms['targetings']);

            $deliveryModifier = $this->deliveryModifierReadRepository->getById($deliveryModifier_id);

            DB::commit();
        } catch (Throwable) {
            DB::rollBack();

            throw new FailedToUpdateDeliveryModifierException();
        }

        return new DeliveryModifierResource($deliveryModifier->load(DeliveryModifier::RELATIONS));
    }

    private function prepareUpdateData(UpdateDeliveryModifierDTO $dto): array
    {
        return [
            'name' => $dto->name,
            'type' => $dto->type,
            'alternative_id' => $dto->alternative_id,
            'delivery_model_id' => $dto->delivery_model_id,
            'fallback_weight' => $dto->fallback_weight,
            'notes' => $dto->notes,
            'active' => $dto->active,
            'fallback_budget_cap_percentage' => $dto->fallback_budget_cap_percentage,
        ];
    }
}
