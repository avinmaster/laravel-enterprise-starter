<?php

namespace App\Repositories\Read\VendorFee;

use App\Exceptions\VendorFee\VendorFeeDoesNotExistException;
use App\Models\VendorFee;
use App\Services\VendorFee\DTO\IndexVendorFeeDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

class VendorFeeReadRepository implements VendorFeeReadRepositoryInterface
{
    /**
     * @throws VendorFeeDoesNotExistException
     */
    public function getById(string $id, array $relations = []): VendorFee
    {
        /* @var VendorFee $vendorFee */
        $vendorFee = $this->query()
            ->where('id', $id)
            ->with($relations)
            ->first();

        if (!$vendorFee) {
            throw new VendorFeeDoesNotExistException();
        }

        return $vendorFee;
    }

    public function index(IndexVendorFeeDTO $dto, array $relations = []): LengthAwarePaginator
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
    
    private function query(): Builder
    {
        return VendorFee::query();
    }
}
