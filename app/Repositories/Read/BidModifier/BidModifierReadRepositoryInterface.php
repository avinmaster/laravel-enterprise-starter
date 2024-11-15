<?php

namespace App\Repositories\Read\BidModifier;

use App\Models\BidModifier;
use App\Services\BidModifier\DTO\IndexBidModifierDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface BidModifierReadRepositoryInterface
{
    public function index(IndexBidModifierDTO $dto, array $relations = []): LengthAwarePaginator;

    public function getById(string $id): BidModifier;
}
