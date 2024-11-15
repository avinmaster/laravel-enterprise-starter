<?php

namespace App\Http\Requests\Creative;

use App\Models\Creative;
use Illuminate\Foundation\Http\FormRequest;

class DeleteCreativeRequest extends FormRequest
{
    public const ID = 'id';

    public function authorize(): bool
    {
        $creative_id = $this->getId();

        return $this->user()->can('delete', [Creative::class, $creative_id]);
    }

    public function getId(): string
    {
        return $this->route(self::ID);
    }
}
