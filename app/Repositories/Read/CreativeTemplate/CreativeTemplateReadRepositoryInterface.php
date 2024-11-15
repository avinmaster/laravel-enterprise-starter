<?php

namespace App\Repositories\Read\CreativeTemplate;

use App\Models\CreativeTemplate;
use App\Services\CreativeTemplate\DTO\IndexCreativeTemplateDTO;
use Illuminate\Database\Eloquent\Collection;

interface CreativeTemplateReadRepositoryInterface
{
    public function getById(string $id): CreativeTemplate;

    public function index(IndexCreativeTemplateDTO $dto): Collection;
}
