<?php

namespace App\Repositories\Read\DeliveryModifier;

use App\Models\DeliveryModifier;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Services\DeliveryModifier\DTO\IndexDeliveryModifierDTO;
use App\Exceptions\DeliveryModifier\DeliveryModifierDoesNotExistException;

class DeliveryModifierReadRepository implements DeliveryModifierReadRepositoryInterface
{
    private function query(): Builder
    {
        return DeliveryModifier::query();
    }

    /**
     * @throws DeliveryModifierDoesNotExistException
     */
    public function getById(string $id, array $relations = []): DeliveryModifier
    {
        /* @var DeliveryModifier $delivery */
        $delivery = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$delivery) {
            throw new DeliveryModifierDoesNotExistException();
        }

        return  $delivery;
    }

    public function index(IndexDeliveryModifierDTO $dto, array $relations = []): LengthAwarePaginator
    {
        return $this->query()
            ->where('user_id', $dto->user_id)
            ->with($relations)
            ->paginate(
                $dto->pagination->per_page,
                ['*'],
                'page',
                $dto->pagination->page
            );
    }
}
