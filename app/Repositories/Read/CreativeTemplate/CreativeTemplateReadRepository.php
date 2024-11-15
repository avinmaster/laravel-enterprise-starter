<?php

namespace App\Repositories\Read\CreativeTemplate;

use App\Exceptions\CreativeTemplate\CreativeTemplateDoesNotExistException;
use App\Models\CreativeTemplate;
use App\Services\CreativeTemplate\DTO\IndexCreativeTemplateDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CreativeTemplateReadRepository implements CreativeTemplateReadRepositoryInterface
{
    /* @throws CreativeTemplateDoesNotExistException */
    public function getById(string $id, array $relations = []): CreativeTemplate
    {
        /* @var CreativeTemplate $creativeTemplate */
        $creativeTemplate = $this->query()
            ->where('id', $id)
            ->first();

        if (!$creativeTemplate) {
            throw new CreativeTemplateDoesNotExistException();
        }

        return $creativeTemplate;
    }

    public function index(IndexCreativeTemplateDTO $dto): Collection
    {
        $query = $this->query();

        $query->when($dto->sorts, function ($query) use ($dto) {
            foreach ($dto->sorts as $sort) {
                $query->orderBy($sort['value'], $sort['key']);
            }
        });

        $query->when($dto->creative_type !== null, function ($query) use ($dto) {
            $query->where('creative_type', $dto->creative_type);
        });

        return $query->get();
    }

    private function query(): Builder
    {
        return CreativeTemplate::query();
    }
}
