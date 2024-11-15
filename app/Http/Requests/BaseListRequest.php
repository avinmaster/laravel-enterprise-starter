<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class BaseListRequest extends ListRequest
{
    public const SORT_ASC = 'asc';
    public const SORT_DESC = 'desc';
    public const SORTS = 'sort';
    public const SORTS_KEY = 'sort.key.*';
    public const SORTS_VALUE = 'sort.value.*';

    public function rules(): array
    {
        return array_merge(parent::rules(), [
            self::SORTS => [
                'array',
                'nullable',
            ],
            self::SORTS_KEY => [
                'string',
                'required',
            ],
            self::SORTS_VALUE => [
                'string',
                'required',
                Rule::in([
                    self::SORT_ASC,
                    self::SORT_DESC,
                ]),
            ],
        ]);
    }

    public function getSort(): array
    {
        $sort = $this->get(self::SORTS);

        if (!$sort) {
            return [];
        }

        $result = [];
        foreach ($sort['key'] as $key => $field) {
            $result[] = [
                'key' => $sort['value'][$key] ?? self::SORT_ASC,
                'value' => $field,
            ];
        }

        return $result;
    }
}
