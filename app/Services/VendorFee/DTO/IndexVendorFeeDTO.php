<?php

namespace App\Services\VendorFee\DTO;

use App\Http\Requests\VendorFee\IndexVendorFeeRequest;
use App\Services\DTO\PaginationParamsDTO;
use Spatie\LaravelData\Data;

class IndexVendorFeeDTO extends Data
{
    public PaginationParamsDTO $pagination;
    public string $user_id;

    public static function fromRequest(IndexVendorFeeRequest $request): self
    {
        return self::from([
            'user_id' => request()->user()->id,
            'pagination' => new PaginationParamsDTO(
                $request->getPage(),
                $request->getPerPage()
            )
        ]);
    }
}
