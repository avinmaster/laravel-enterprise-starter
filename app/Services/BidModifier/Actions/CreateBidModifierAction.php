<?php

namespace App\Services\BidModifier\Actions;

use Throwable;
use App\Models\BidModifier;
use App\Models\BidModifierTerm;
use Illuminate\Support\Facades\DB;
use App\Services\BidModifier\DTO\CreateBidModifierDTO;
use App\Http\Resources\BidModifier\BidModifierResource;
use App\Exceptions\BidModifier\FailedToCreateBidModifierException;
use App\Services\BidModifierTerm\UseCases\GetBidModifierTermDataUseCase;
use App\Repositories\Write\BidModifier\BidModifierWriteRepositoryInterface;

class CreateBidModifierAction
{
    public function __construct(
        private readonly GetBidModifierTermDataUseCase $getBidModifierTermDataUseCase,
        private readonly BidModifierWriteRepositoryInterface $bidModifierWriteRepository,
    ) {
    }

    /**
     * @throws FailedToCreateBidModifierException
     */
    public function run(CreateBidModifierDTO $dto): BidModifierResource
    {
        DB::beginTransaction();

        try {
            $data = BidModifier::createModel($dto);
            $bidModifier = $this->bidModifierWriteRepository->create($data);

            $bidModifiers = $this->getBidModifierTermDataUseCase->run(
                $dto->bid_modifier_terms,
                $data['id']
            );
            BidModifierTerm::query()->insert($bidModifiers);

            DB::commit();
        } catch (Throwable) {
            DB::rollBack();

            throw new FailedToCreateBidModifierException();
        }

        return new BidModifierResource($bidModifier);
    }
}
