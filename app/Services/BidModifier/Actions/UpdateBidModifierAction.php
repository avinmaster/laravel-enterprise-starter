<?php

namespace App\Services\BidModifier\Actions;

use App\Exceptions\BidModifier\FailedToUpdateBidModifierException;
use App\Http\Resources\BidModifier\BidModifierResource;
use App\Models\BidModifier;
use App\Models\BidModifierTerm;
use App\Repositories\Read\BidModifier\BidModifierReadRepositoryInterface;
use App\Repositories\Write\BidModifier\BidModifierWriteRepositoryInterface;
use App\Services\BidModifier\DTO\UpdateBidModifierDTO;
use App\Services\BidModifierTerm\UseCases\GetBidModifierTermDataUseCase;
use Illuminate\Support\Facades\DB;
use Throwable;

class UpdateBidModifierAction
{
    public function __construct(
        private readonly GetBidModifierTermDataUseCase $getBidModifierTermDataUseCase,
        protected BidModifierReadRepositoryInterface  $bidModifierReadRepository,
        protected BidModifierWriteRepositoryInterface $bidModifierWriteRepository,
    ) {
    }

    /**
     * @throws FailedToUpdateBidModifierException
     */
    public function run(string $bidModifier_id, UpdateBidModifierDTO $dto): BidModifierResource
    {
        DB::beginTransaction();

        try {
            $bidModifierData = $this->prepareUpdateData($dto);
            $this->bidModifierWriteRepository->update($bidModifier_id, $bidModifierData);

            $bidModifierTerms = $this->getBidModifierTermDataUseCase->run(
                $dto->bid_modifier_terms,
                $bidModifierData['id']
            );

            BidModifierTerm::query()->where('bid_modifier_id', $bidModifierData['id'])->delete();
            BidModifierTerm::query()->insert($bidModifierTerms);

            $bidModifier = $this->bidModifierReadRepository->getById($bidModifier_id);

            DB::commit();
        } catch (Throwable) {
            DB::rollBack();

            throw new FailedToUpdateBidModifierException();
        }

        return new BidModifierResource($bidModifier->load(BidModifier::RELATIONS));
    }

    private function prepareUpdateData(UpdateBidModifierDTO $dto): array
    {
        return [
            'id' => $dto->id,
            'user_id' => $dto->user_id,
            'advertiser_id' => $dto->advertiser_id,
            'bid_model_id' => $dto->bid_model_id,
            'name' => $dto->bid_modifier_name,
            'alternative_id' => $dto->alternative_id,
            'notes' => $dto->notes,
            'active' => $dto->active,
        ];
    }
}
