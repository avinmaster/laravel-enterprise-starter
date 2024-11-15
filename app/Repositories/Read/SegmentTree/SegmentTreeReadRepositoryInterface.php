<?php

namespace App\Repositories\Read\SegmentTree;

use App\Services\SegmentTree\DTO\IndexSegmentTreeDTO;
use Illuminate\Database\Eloquent\Collection;

interface SegmentTreeReadRepositoryInterface
{
    public function index(IndexSegmentTreeDTO $dto): Collection;
}
