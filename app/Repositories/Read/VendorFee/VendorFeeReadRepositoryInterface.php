<?php

namespace App\Repositories\Read\VendorFee;

use App\Models\VendorFee;
use App\Services\VendorFee\DTO\IndexVendorFeeDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface VendorFeeReadRepositoryInterface
{
    public function getById(string $id, array $relations = []): VendorFee;

    public function index(IndexVendorFeeDTO $dto, array $relations = []): LengthAwarePaginator;
}
