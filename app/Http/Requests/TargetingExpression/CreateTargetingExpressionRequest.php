<?php

namespace App\Http\Requests\TargetingExpression;

use App\Enums\TargetingExpression\TargetingExpressionComparatorEnum;
use App\Enums\TargetingExpression\TargetingExpressionOperatorEnum;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\Enum\Laravel\Rules\EnumRule;

class CreateTargetingExpressionRequest extends FormRequest
{
    public const NAME = 'name';
    public const ACTIVE = 'active';
    public const ALTERNATIVE_ID = 'alternative_id';
    public const NOTES = 'notes';
    public const GUARANTEED = 'guaranteed';
    public const MODULES = 'modules';
    public const MODULES_MODULE = 'modules.*.module';
    public const MODULES_KEY = 'modules.*.key';
    public const MODULES_OPERATOR = 'modules.*.operator';
    public const MODULES_COMPARATOR = 'modules.*.comparator';
    public const MODULES_VALUE = 'modules.*.value';

    public function rules(): array
    {
        return [
            self::NAME => [
                'string',
                'max:255',
            ],
            self::ACTIVE => [
                'boolean',
            ],
            self::ALTERNATIVE_ID => [
                'string',
            ],
            self::NOTES => [
                'string',
            ],
            self::GUARANTEED => [
                'boolean',
            ],
            self::MODULES => [
                'array',
                'required',
            ],
            self::MODULES_MODULE => [
                'string',
            ],
            self::MODULES_KEY => [
                'string',
            ],
            self::MODULES_OPERATOR => [
                'string',
                new EnumRule(TargetingExpressionOperatorEnum::class),
            ],
            self::MODULES_COMPARATOR => [
                'string',
                new EnumRule(TargetingExpressionComparatorEnum::class),
            ],
        ];
    }

    public function getName(): ?string
    {
        return $this->get(self::NAME);
    }

    public function getActive(): ?bool
    {
        return $this->get(self::ACTIVE);
    }

    public function getNotes(): ?string
    {
        return $this->get(self::NOTES);
    }

    public function getAlternativeId(): ?string
    {
        return $this->get(self::ALTERNATIVE_ID);
    }

    public function getGuaranteed(): ?bool
    {
        return $this->get(self::GUARANTEED);
    }

    public function getModules(): array
    {
        return $this->get(self::MODULES);
    }
}
