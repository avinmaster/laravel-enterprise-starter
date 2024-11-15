<?php

namespace App\Services\TargetingExpression\DTO;

use App\Http\Requests\TargetingExpression\CreateTargetingExpressionRequest;
use Spatie\LaravelData\Data;

class CreateTargetingExpressionDTO extends Data
{
    public string $user_id;
    public ?string $name;
    public ?bool $active;
    public ?string $alternative_id;
    public ?string $notes;
    public ?bool $guaranteed;
    public array $modules;

    public static function fromRequest(CreateTargetingExpressionRequest $request): self
    {
        return self::from([
            'user_id' => $request->user()->id,
            'name' => $request->getName(),
            'active' => $request->getActive(),
            'alternative_id' => $request->getAlternativeId(),
            'notes' => $request->getNotes(),
            'guaranteed' => $request->getGuaranteed(),
            'modules' => $request->getModules(),
        ]);
    }
}
