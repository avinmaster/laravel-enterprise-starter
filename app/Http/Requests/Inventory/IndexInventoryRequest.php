<?php

namespace App\Http\Requests\Inventory;

use App\Http\Requests\BaseListRequest;

class IndexInventoryRequest extends BaseListRequest
{
    public const PLACEMENT_ID = 'placement_id';
    public const SITE_ID = 'site_id';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            self::PLACEMENT_ID => [
                'string',
                'nullable',
            ],
            self::SITE_ID => [
                'string',
                'nullable',
            ],
        ];
    }

    public function getPlacementID(): ?string
    {
        return $this->get(self::PLACEMENT_ID);
    }

    public function getSiteID(): ?string
    {
        return $this->get(self::SITE_ID);
    }
}
