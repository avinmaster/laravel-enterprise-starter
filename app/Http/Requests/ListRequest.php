<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListRequest extends FormRequest
{
    public const PER_PAGE_DEFAULT = 10;

    public const PAGE = 'page';
    public const PER_PAGE = 'per_page';
    public const Q = 'q';

    public function rules(): array
    {
        return [
            self::PAGE => [
                'integer',
                'nullable'
            ],
            self::PER_PAGE => [
                'integer',
                'min:10',
                'max:100'
            ],
            self::Q => [
                'string',
                'nullable'
            ],
        ];
    }

    public function getPage(): int
    {
        return $this->get(self::PAGE) ?? 1;
    }

    public function getPerPage(): int
    {
        return $this->get(self::PER_PAGE) ?? self::PER_PAGE_DEFAULT;
    }

    public function getQ(): ?string
    {
        return $this->get(self::Q);
    }
}
